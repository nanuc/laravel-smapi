<?php

namespace Nanuc\Smapi\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrivacyAndComplianceLocaleResource extends JsonResource
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
            'privacyPolicyUrl' => $this->resource->privacyPolicyUrl,
            'termsOfUseUrl' => $this->resource->termsOfUseUrl,
        ];
    }
}
