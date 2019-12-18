<?php

namespace Nanuc\Smapi\Schemas;

class SlotTypeValueName extends Schema
{
    public ?string $value = null;
    public ?array $synonyms = null;

    public function parse()
    {
        $this->value = $this->parseEntity('value');
        $this->synonyms = $this->parseArray('synonyms');
    }
}