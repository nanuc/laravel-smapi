<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LanguageModelResource extends JsonResource
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
            'invocationName' => $this->resource->invocationName,
            'intents' => IntentResource::collection($this->resource->intents),
            'types' => SlotTypeResource::collection($this->resource->types),
        ];
    }
}
