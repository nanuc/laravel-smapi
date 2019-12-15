<?php

namespace Nanuc\Smapi\Schemas;

class PublishingInformation extends Schema
{
    public array $locales = [];
    public array $distributionCountries = [];
    public ?bool $isAvailableWorldwide = null;
    public ?string $distributionMode = null;
    public ?string $testingInstructions = null;
    public ?string $category = null;
    public ?AutomaticDistribution $automaticDistribution = null;

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
