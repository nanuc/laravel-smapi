<?php

namespace Nanuc\Smapi\Schemas;

class SlotTypeValue extends Schema
{
    public ?int $id = null;
    public ?SlotTypeValueName $name = null;
    
    public function parse()
    {
        $this->id = $this->parseEntity('id');
        $this->name = $this->parseEntity('name', SlotTypeValueName::class);
    }
}
