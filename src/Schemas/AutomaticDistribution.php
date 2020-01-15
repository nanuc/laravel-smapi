<?php

namespace Nanuc\Smapi\Schemas;

class AutomaticDistribution extends Schema
{
    public $isActive = null;
    public $sourceLocaleForLanguages = null;

    public function parse()
    {
        $this->isActive = $this->parseEntity('isActive');
        $this->sourceLocaleForLanguages = $this->parseArray('sourceLocaleForLanguages', SourceLocaleForLanguage::class);
    }
}
