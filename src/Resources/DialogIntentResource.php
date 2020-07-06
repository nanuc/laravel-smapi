<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DialogIntentResource extends JsonResource
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
            'name' => $this->resource->name,
            'delegationStrategy' => $this->when($this->resource->delegationStrategy, $this->resource->delegationStrategy),
            'confirmationRequired' => $this->resource->confirmationRequired,
            'slots' => DialogIntentSlotResource::collection($this->resource->slots),
            'prompts' => $this->when($this->resource->prompts, $this->resource->prompts),
        ];
    }
}
