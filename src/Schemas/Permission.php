<?php

namespace Nanuc\Smapi\Schemas;

class Permission extends Schema
{
    protected string $name;

    public function parse()
    {
        $this->name = $this->parseEntity('name');
    }

}
