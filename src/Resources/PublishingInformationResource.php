<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PublishingInformationResource extends JsonResource
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
            'locales' => new LocalesResource($this->resource->locales),
            'distributionCountries' => $this->resource->distributionCountries,
            'isAvailableWorldwide' => $this->resource->isAvailableWorldwide,
            'distributionMode' => $this->resource->distributionMode,
            'testingInstructions' => $this->resource->testingInstructions,
            'category' => $this->resource->category,
            'automaticDistribution' => new AutomaticDistributionResource($this->resource->automaticDistribution),
        ];
    }
}
