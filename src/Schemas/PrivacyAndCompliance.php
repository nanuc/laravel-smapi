<?php

namespace Nanuc\Smapi\Schemas;

class PrivacyAndCompliance extends Schema
{
    protected bool $allowsPurchases;
    protected bool $usesPersonalInfo;
    protected bool $isChildDirected;
    protected bool $isExportCompliant;
    protected bool $containsAds;
    protected array $locales;

    public function parse()
    {
        $this->locales = $this->parseArray('locales', PrivacyAndComplianceLocale::class, true);
        $this->distributionCountries = $this->parseArray('distributionCountries');
        $this->isAvailableWorldwide = $this->parseEntity('isAvailableWorldwide');
        $this->distributionMode = $this->parseEntity('distributionMode');
        $this->testingInstructions = $this->parseEntity('testingInstructions');
        $this->category = $this->parseEntity('category');
    }
}
