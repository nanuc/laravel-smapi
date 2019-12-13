<?php

namespace Nanuc\Smapi\Schemas;

class SlotType extends Schema
{
    protected string $name;
    protected array $values = [];

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->values = $this->parseArray('values', SlotTypeValue::class);
    }
}