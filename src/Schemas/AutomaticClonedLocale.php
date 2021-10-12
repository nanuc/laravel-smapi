<?php

namespace Nanuc\Smapi\Schemas;

class AutomaticClonedLocale extends Schema
{
    public $locales = null;

    public function parse()
    {
        $this->locales = $this->parseArray('locales', CloneLocale::class);
    }
}
