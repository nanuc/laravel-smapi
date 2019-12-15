<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Nanuc\Smapi\Schemas\Api\Custom;

class ApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if($this->resource instanceof Custom) {
            return [
                'endpoint' => new EndpointResource($this->resource->endpoint),
                'interfaces' => InterfaceResource::collection(collect($this->resource->interfaces)),
                'regions' => $this->when(count($this->resource->regions) > 0, RegionResource::collection(collect($this->resource->regions))),
            ];
        }

    }
}
