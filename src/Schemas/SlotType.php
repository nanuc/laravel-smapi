<?php

namespace Nanuc\Smapi\Schemas;

class SlotType extends Schema
{
    public $name = null;
    public $values = null;

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->values = $this->parseArray('values', SlotTypeValue::class);
    }
}