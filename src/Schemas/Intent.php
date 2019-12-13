<?php

namespace Nanuc\Smapi\Schemas;

class Intent extends Schema
{
    protected string $name;
    protected array $slots = [];
    protected array $samples = [];

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->slots = $this->parseArray('slots', Slot::class);
        $this->samples = $this->parseArray('samples');
    }
}
