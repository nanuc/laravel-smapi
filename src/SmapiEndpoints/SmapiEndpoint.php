<?php

namespace Nanuc\Smapi\SmapiEndpoints;

use App\Exceptions\AmazonDeploymentException;
use GuzzleHttp\Client;
use Illuminate\Support\Arr;
use Nanuc\Smapi\Exceptions\SmapiException;
use Illuminate\Support\Facades\Cache;
use Nanuc\Smapi\Models\SmapiRequest;

class SmapiEndpoint
{
    protected $baseUri = 'https://api.amazonalexa.com';

    protected $version = 'v1';

    protected $provisioningInfo = [];

    protected $tokenUri = 'https://api.amazon.com/auth/o2/token';

    protected $endpoint = '';

    public function __construct($provisioningInfo = [])
    {
        $this->provisioningInfo = $provisioningInfo;
    }

    protected function get($endpoint = null)
    {
        return $this->runHttpMethod('get', $endpoint);
    }

    protected function post($endpoint = null, $data = [], &$headers = [])
    {
        return $this->runHttpMethod('post', $endpoint, $data, $headers);
    }

    protected function put($endpoint = null, $data = [])
    {
        return $this->runHttpMethod('put', $endpoint, $data);
    }

    protected function delete($endpoint = null)
    {
        return $this->runHttpMethod('delete', $endpoint);
    }

    protected function runHttpMethod($method, $endpoint = null, $data = [], &$headers = [])
    {
        if($endpoint) {
            $this->endpoint = $endpoint;
        }
        $response = $this->request($method, $data);
        $headers = $response->getHeaders();
        return json_decode($response->getBody());
    }

    protected function getHttpStatus($method = 'GET', $endpoint = null)
    {
        if($endpoint) {
            $this->endpoint = $endpoint;
        }
        return $this->request($method)->getStatusCode();
    }

    /**
     * @param $method
     * @param array $data
     * @return \Psr\Http\Message\ResponseInterface
     * @throws SmapiException
     */
    private function request($method, $data = [])
    {
        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        if (count($data) > 0) {
            $requestData['body'] = json_encode($data);
        }

        $requestData['headers'] = [
            'Authorization' => $this->accessToken(),
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'Accept-Language' => 'en-US',
        ];


        $smapiRequest = new SmapiRequest();
        $smapiRequest->skill_id = property_exists($this, 'skill') ? $this->skill->getSkillId() : null;
        $smapiRequest->method = strtolower($method);
        $smapiRequest->url = $this->buildUri();
        $smapiRequest->data = $data;

        try {
            $startTime = microtime(true);
            $response = $client->request($method, $this->buildUri(), $requestData);
        } catch (\Exception $e) {
            $smapiRequest->runtime = 1000 * (microtime(true) - $startTime);

            if (method_exists($e, 'getResponse')) {
                $smapiRequest->response_status = $e->getResponse()->getStatusCode();
                $smapiRequest->response_body = json_decode($e->getResponse()->getBody());
                if(config('smapi.logging.requests.database')) {
                    $smapiRequest->save();
                }
                throw new SmapiException(json_decode($e->getResponse()->getBody()), $this->skill->getSkillId(), $smapiRequest);
            } else {
                if(config('smapi.logging.requests.database')) {
                    $smapiRequest->save();
                }
                throw new SmapiException(get_class($e), $this->skill->getSkillId(), $smapiRequest ?? null);
            }
        }

        if(config('smapi.logging.requests.database')) {
            $smapiRequest->runtime = 1000 * (microtime(true) - $startTime);
            $smapiRequest->response_status = $response->getStatusCode();
            $smapiRequest->response_body = json_decode($response->getBody());
            $smapiRequest->save();
        }

        return $response;
    }

    private function buildUri()
    {
        return $this->version.'/'.$this->getUri();
    }

    protected function getUri()
    {
        return strlen($this->endpoint) ? $this->endpoint : '';
    }

    /**
     * @return mixed
     * @throws SmapiException
     */
    private function accessToken()
    {
        if (Cache::has($this->getAccessTokenCacheKey())) {
            return Cache::get($this->getAccessTokenCacheKey());
        } else {
            if ($this->provisioningInfo('refresh-token')) {
                return $this->refreshToken();
            } else {
                throw new SmapiException('No refresh token given.');
            }
        }
    }

    /**
     * @return mixed
     * @throws SmapiException
     */
    private function refreshToken()
    {
        $client = new Client();
        $requestData['form_params'] = [
            'grant_type' => 'refresh_token',
            'refresh_token' => $this->provisioningInfo('refresh-token'),
            'client_id' => $this->provisioningInfo('amazon-client-id'),
            'client_secret' => $this->provisioningInfo('amazon-client-secret'),
        ];

        $requestData['headers'] = [
            'content-type' => 'application/x-www-form-urlencoded',
        ];

        try {
            $response = $client->request('POST', $this->tokenUri, $requestData);
        } catch (\Exception $e) {
            throw new SmapiException($e->getResponse()->getBody()->getContents());
        }

        $response = json_decode($response->getBody()->getContents(), true);
        Cache::put($this->getAccessTokenCacheKey(), $response['access_token'], $response['expires_in'] / 60);

        return $response['access_token'];
    }

    private function getAccessTokenCacheKey()
    {
        return 'accessTokenCacheKey-' . md5($this->provisioningInfo('refresh-token'));
    }

    private function provisioningInfo($key)
    {
        return Arr::get($this->provisioningInfo, $key, config('smapi.' . $key));
    }
}
