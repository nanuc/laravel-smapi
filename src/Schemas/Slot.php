<?php

namespace Nanuc\Smapi\Schemas;

class Slot extends Schema
{
    public $name;
    public $type;
    public $samples = [];

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->type = $this->parseEntity('type');
        $this->samples = $this->parseArray('samples');
    }
}
