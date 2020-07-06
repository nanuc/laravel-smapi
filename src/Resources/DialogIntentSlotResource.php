<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DialogIntentSlotResource extends JsonResource
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
            'type' => $this->resource->type,
            'confirmationRequired' => $this->resource->confirmationRequired,
            'elicitationRequired' => $this->resource->elicitationRequired,
            'prompts' => $this->resource->prompts,
        ];
    }
}
