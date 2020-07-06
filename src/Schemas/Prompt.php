<?php

namespace Nanuc\Smapi\Schemas;

class Prompt extends Schema
{
    public $id;
    public $variations = [];

    public function parse()
    {
        $this->id = $this->parseEntity('id');
        $this->variations = $this->parseArray('variations', Variation::class);
    }
}
