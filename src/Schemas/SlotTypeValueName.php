<?php

namespace Nanuc\Smapi\Schemas;

class SlotTypeValueName extends Schema
{
    public $value = null;
    public $synonyms = null;

    public function parse()
    {
        $this->value = $this->parseEntity('value');
        $this->synonyms = $this->parseArray('synonyms');
    }
}