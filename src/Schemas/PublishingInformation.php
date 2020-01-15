<?php

namespace Nanuc\Smapi\Schemas;

class PublishingInformation extends Schema
{
    public $locales = [];
    public $distributionCountries = [];
    public $isAvailableWorldwide = null;
    public $distributionMode = null;
    public $testingInstructions = null;
    public $category = null;
    public $automaticDistribution = null;

    public function parse()
    {
        $this->locales = $this->parseArray('locales', Locale::class, true);
        $this->distributionCountries = $this->parseArray('distributionCountries');
        $this->isAvailableWorldwide = $this->parseEntity('isAvailableWorldwide');
        $this->distributionMode = $this->parseEntity('distributionMode');
        $this->testingInstructions = $this->parseEntity('testingInstructions');
        $this->category = $this->parseEntity('category');
        $this->automaticDistribution = $this->parseEntity('automaticDistribution', AutomaticDistribution::class);
    }
}
