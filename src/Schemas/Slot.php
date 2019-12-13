<?php

namespace Nanuc\Smapi\Schemas;

class Slot extends Schema
{
    protected string $name;
    protected string $type;
    protected array $samples = [];

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->type = $this->parseEntity('type');
        $this->samples = $this->parseArray('samples');
    }
}
