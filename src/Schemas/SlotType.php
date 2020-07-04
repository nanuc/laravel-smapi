<?php

namespace Nanuc\Smapi\Schemas;

class SlotType extends Schema
{
    public $name;
    public $values;

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->values = $this->parseArray('values', SlotTypeValue::class);
    }
}
