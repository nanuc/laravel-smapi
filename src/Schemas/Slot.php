<?php

namespace Nanuc\Smapi\Schemas;

class Slot extends Schema
{
    public ?string $name = null;
    public ?string $type = null;
    public ?array $samples = null;

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->type = $this->parseEntity('type');
        $this->samples = $this->parseArray('samples');
    }
}
