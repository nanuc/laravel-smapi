<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ManifestResource extends JsonResource
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
            'apis' => ApiResource::collection(collect($this->resource->apis)),
            'publishingInformation' => new PublishingInformationResource($this->resource->publishingInformation),
            'privacyAndCompliance' => new PrivacyAndComplianceResource($this->resource->privacyAndCompliance),
        ];
    }
}
