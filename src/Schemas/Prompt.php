<?php

namespace Nanuc\Smapi\Schemas;

class Prompt extends Schema
{
    public $name;
    public $id;
    public $variations;

    public function parse()
    {
        $this->id = $this->parseEntity('id');
        $this->name = $this->parseEntity('name');
        $this->variations = $this->parseArray('variations', Variation::class);
    }
}
