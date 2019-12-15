<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocaleResource extends JsonResource
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
            'description' => $this->resource->description,
            'summary' => $this->resource->summary,
            'smallIconUri' => $this->resource->smallIconUri,
            'largeIconUri' => $this->resource->largeIconUri,
            'examplePhrases' => $this->resource->examplePhrases,
            'keywords' => $this->resource->keywords,
            'updatesDescription' => $this->resource->updatesDescription,
        ];
    }
}
