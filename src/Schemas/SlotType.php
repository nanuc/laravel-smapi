<?php

namespace Nanuc\Smapi\Schemas;

class SlotType extends Schema
{
    public $name;
    public $values = [];
    public $valueSupplier;

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->values = $this->parseArray('values', SlotTypeValue::class);
        $this->valueSupplier = $this->parseEntity('valueSupplier', CatalogValueSupplier::class);
    }
}
