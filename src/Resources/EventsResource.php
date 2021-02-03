<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventsResource extends JsonResource
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
            'publications' => PublicationsResource::collection($this->resource->publications),
            'endpoint' => new EndpointResource($this->resource->endpoint),
        ];
    }
}
