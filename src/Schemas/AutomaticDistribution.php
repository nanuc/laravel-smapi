<?php

namespace Nanuc\Smapi\Schemas;

class AutomaticDistribution extends Schema
{
    public ?bool $isActive = null;
    public ?array $sourceLocaleForLanguages = null;

    public function parse()
    {
        $this->isActive = $this->parseEntity('isActive');
        $this->sourceLocaleForLanguages = $this->parseArray('sourceLocaleForLanguages', SourceLocaleForLanguage::class);
    }
}
