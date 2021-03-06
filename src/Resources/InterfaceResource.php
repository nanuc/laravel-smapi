<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InterfaceResource extends JsonResource
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
            'type' => $this->resource->type,
            'supportedViewports' => $this->when($this->resource->supportedViewports, $this->resource->supportedViewports),
        ];
    }
}
