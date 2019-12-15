<?php

namespace Nanuc\Smapi\Schemas;

class SourceLocaleForLanguage extends Schema
{
    public ?string $language = null;
    public ?string $sourceLocale = null;

    public function parse()
    {
        $this->language = $this->parseEntity('language');
        $this->sourceLocale = $this->parseEntity('sourceLocale');
    }
}
