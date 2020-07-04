<?php

namespace Nanuc\Smapi\Exceptions;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Nanuc\Smapi\Lib\Error;

class SmapiException extends Exception
{
    public $smapiMessage;

    public $violations;

    public $skillId;

    public $originalError;

    public $smapiRequest;

    public function __construct($error, $skillId, $smapiRequest)
    {
        $this->smapiMessage = Arr::get($error, 'message');
        $this->violations = Arr::get($error, 'violations', []);
        $this->skillId = $skillId;
        $this->originalError = $error;
        $this->smapiRequest = $smapiRequest;

        $error = json_encode($error);

        parent::__construct($error);
        Log::channel(config('smapi.logging.errors.channel'))->info('Amazon Deployment Exception for '.$this->skillId.': '.$error);
    }
}
