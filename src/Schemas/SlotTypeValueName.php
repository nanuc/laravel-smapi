<?php

namespace Nanuc\Smapi\Schemas;

class SlotTypeValueName extends Schema
{
    public ?string $value = null;
    public ?array $synonyms = null;

    public function parse()
    {
        $this->id = $this->parseEntity('value');
        $this->id = $this->parseArray('synonyms');
    }
}