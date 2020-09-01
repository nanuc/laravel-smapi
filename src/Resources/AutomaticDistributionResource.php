<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AutomaticDistributionResource extends JsonResource
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
            'isActive' => $this->resource->isActive,
            'sourceLocaleForLanguages' => $this->resource->sourceLocaleForLanguages,
        ];
    }
}
