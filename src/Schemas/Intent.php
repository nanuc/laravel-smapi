<?php

namespace Nanuc\Smapi\Schemas;

class Intent extends Schema
{
    public $name = null;
    public $samples = [];
    public $slots = [];

    public function __construct($name = null, $samples = [], $slots = [])
    {
        $this->name = $name;
        $this->samples = $samples;
        $this->slots = $slots;
    }

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->samples = $this->parseArray('samples');
        $this->slots = $this->parseArray('slots', Slot::class);
    }
}
