<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrivacyAndComplianceResource extends JsonResource
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
            'allowsPurchases' => $this->resource->allowsPurchases,
            'usesPersonalInfo' => $this->resource->usesPersonalInfo,
            'isChildDirected' => $this->resource->isChildDirected,
            'isExportCompliant' => $this->resource->isExportCompliant,
            'containsAds' => $this->resource->containsAds,
            'locales' => new PrivacyAndComplianceLocalesResource($this->resource->locales),
        ];
    }
}
