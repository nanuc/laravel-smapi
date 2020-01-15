<?php

namespace Nanuc\Smapi\Schemas;

class PrivacyAndCompliance extends Schema
{
    public $locales = null;
    public $allowsPurchases = null;
    public $usesPersonalInfo = null;
    public $isChildDirected = null;
    public $isExportCompliant = null;
    public $containsAds = null;

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
