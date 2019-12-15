<?php

namespace Nanuc\Smapi\Schemas;

class SlotType extends Schema
{
    public ?string $name = null;
    public ?array $values = null;

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->values = $this->parseArray('values', SlotTypeValue::class);
    }
}