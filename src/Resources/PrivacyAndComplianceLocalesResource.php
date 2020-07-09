<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrivacyAndComplianceLocalesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $locales = [];
        foreach($this->resource as $localeKey => $locale) {
            $locales[$localeKey] = new PrivacyAndComplianceLocaleResource($locale);
        }
        return $locales;
    }
}
