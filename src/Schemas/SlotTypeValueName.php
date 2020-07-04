<?php

namespace Nanuc\Smapi\Schemas;

class SlotTypeValueName extends Schema
{
    public $value;
    public $synonyms;

    public function __construct($value = null, $synonyms = [])
    {
        $this->value = $value;
        $this->synonyms = $synonyms;
    }

    public function parse()
    {
        $this->value = $this->parseEntity('value');
        $this->synonyms = $this->parseArray('synonyms');
    }
}
