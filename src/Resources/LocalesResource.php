<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LocalesResource extends JsonResource
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
            $locales[$localeKey] = new LocaleResource($locale);
        }
        return $locales;
    }
}
