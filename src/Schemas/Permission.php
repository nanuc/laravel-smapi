<?php

namespace Nanuc\Smapi\Schemas;

class Permission extends Schema
{
    public $name = null;

    public function parse()
    {
        $this->name = $this->parseEntity('name');
    }

}
