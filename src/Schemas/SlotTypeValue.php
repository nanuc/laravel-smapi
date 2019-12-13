<?php

namespace Nanuc\Smapi\Schemas;

class SlotTypeValue extends Schema
{
    protected int $id;
    protected SlotTypeValueName $name;

    protected string $fieldName = 'value';

    public function parse()
    {
        $this->id = $this->parseEntity('id');
        $this->name = $this->parseEntity('name', SlotTypeValueName::class);
    }
}
