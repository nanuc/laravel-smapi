<?php

namespace Nanuc\Smapi\Schemas;

class Region extends Schema
{
    public ?Endpoint $endpoint = null;

    public function parse()
    {
        $this->endpoint = $this->parseEntity('endpoint', Endpoint::class);
    }
}
