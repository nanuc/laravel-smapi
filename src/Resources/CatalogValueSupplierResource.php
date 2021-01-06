<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CatalogValueSupplierResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'CatalogValueSupplier',
            'valueCatalog' => [
                'catalogId' => $this->resource->getCatalog()->getCatalogId(),
                'version' => $this->resource->version
            ]
        ];
    }
}
