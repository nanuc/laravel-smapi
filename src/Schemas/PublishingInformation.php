<?php

namespace Nanuc\Smapi\Schemas;

class PublishingInformation extends Schema
{
    protected array $locales;
    protected array $distributionCountries = [];
    protected bool $isAvailableWorldwide;
    protected string $distributionMode;
    protected string $testingInstructions;
    protected string $category;

    public function parse()
    {
        $this->locales = $this->parseArray('locales', Locale::class, true);
        $this->distributionCountries = $this->parseArray('distributionCountries');
        $this->isAvailableWorldwide = $this->parseEntity('isAvailableWorldwide');
        $this->distributionMode = $this->parseEntity('distributionMode');
        $this->testingInstructions = $this->parseEntity('testingInstructions');
        $this->category = $this->parseEntity('category');
    }
}
