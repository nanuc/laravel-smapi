<?php

namespace Nanuc\Smapi\Schemas;

class PrivacyAndCompliance extends Schema
{
    public ?array $locales = null;
    public ?bool $allowsPurchases = null;
    public ?bool $usesPersonalInfo = null;
    public ?bool $isChildDirected = null;
    public ?bool $isExportCompliant = null;
    public ?bool $containsAds = null;

    public function parse()
    {
        $this->locales = $this->parseArray('locales', PrivacyAndComplianceLocale::class, true);
        $this->allowsPurchases = $this->parseEntity('allowsPurchases');
        $this->usesPersonalInfo = $this->parseEntity('usesPersonalInfo');
        $this->isChildDirected = $this->parseEntity('isChildDirected');
        $this->isExportCompliant = $this->parseEntity('isExportCompliant');
        $this->containsAds = $this->parseEntity('containsAds');
    }
}
