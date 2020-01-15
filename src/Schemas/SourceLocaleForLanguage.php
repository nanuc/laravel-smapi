<?php

namespace Nanuc\Smapi\Schemas;

class SourceLocaleForLanguage extends Schema
{
    public $language = null;
    public $sourceLocale = null;

    public function parse()
    {
        $this->language = $this->parseEntity('language');
        $this->sourceLocale = $this->parseEntity('sourceLocale');
    }
}
