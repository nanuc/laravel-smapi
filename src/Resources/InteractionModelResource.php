<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InteractionModelResource extends JsonResource
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
            'languageModel' => new LanguageModelResource($this->resource->languageModel),
            'dialog' => new DialogResource($this->resource->dialog),
            'prompts' => PromptResource::collection(collect($this->resource->prompts)),
        ];
    }
}
