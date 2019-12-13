<?php

namespace Nanuc\Smapi\Schemas;

class SlotTypeValueName extends Schema
{
    protected string $value;
    protected array $synonyms = [];

    public function parse()
    {
        $this->id = $this->parseEntity('value');
        $this->id = $this->parseArray('synonyms');
    }
}