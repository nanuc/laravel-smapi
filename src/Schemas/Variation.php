<?php

namespace Nanuc\Smapi\Schemas;

class Variation extends Schema
{
    public $type;
    public $value;

    public function __construct($type = null, $value = null)
    {
        $this->type = $type;
        $this->value = $value;
    }

    public function parse()
    {
        $this->type = $this->parseEntity('type');
        $this->value = $this->parseEntity('value');

    }
}
