<?php

namespace Nanuc\Smapi\Schemas;

class Region extends Schema
{
    public $endpoint = null;

    public function parse()
    {
        $this->endpoint = $this->parseEntity('endpoint', Endpoint::class);
    }
}
