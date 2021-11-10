<?php

namespace Nanuc\Smapi\SmapiEndpoints\Catalog;

use Illuminate\Support\Arr;

class Management extends Catalog
{
    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/reference-based-catalog-management.html#create-catalog
     */
    public function createCatalog($vendorId, $name)
    {
        $this->useCatalogId = false;

        return $this->post('', [
            'vendorId' => $vendorId,
            'catalog' => [
                'name' => $name
            ]
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/reference-based-catalog-management.html#get-catalog-definition
     */
    public function getCatalogDefinition()
    {
        return $this->get();
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/reference-based-catalog-management.html#version-data
     */
    public function createCatalogVersion($url, $type = 'URL', $description = '')
    {
        $this->post('versions', [
            'source' => [
                'type' => $type,
                'url' => $url
            ],
            'description' => $description
        ], $headers);

        return Arr::last(explode('/', Arr::get($headers, 'Location.0')));
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/reference-based-catalog-management.html#list-catalog-versions
     */
    public function listCatalogVersions($nextToken = null)
    {
        $nextToken = $nextToken ? '?nextToken=' . $nextToken : '';
        return $this->get('versions' . $nextToken);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/reference-based-catalog-management.html#get-catalog-version
     */
    public function getCatalogVersion($version = 1)
    {
        return $this->get('versions/' . $version);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/reference-based-catalog-management.html#catalog-values
     */
    public function getCatalogValues($version = 1)
    {
        return $this->get('versions/' . $version . '/values');
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/reference-based-catalog-management.html#catalog-update-status
     */
    public function getCatalogUpdateStatus($updateRequestId)
    {
        return $this->get('updateRequest/' . $updateRequestId);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/reference-based-catalog-management.html#delete-catalog
     */
    public function deleteCatalog()
    {
        return $this->delete('');
    }
}
