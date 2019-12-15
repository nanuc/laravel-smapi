<?php

namespace Nanuc\Smapi\Schemas;

class Intent extends Schema
{
    public ?string $name = null;
    public ?array $slots = null;
    public ?array $samples = null;

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->slots = $this->parseArray('slots', Slot::class);
        $this->samples = $this->parseArray('samples');
    }
}
