<?php

namespace Nanuc\Smapi\Schemas;

class Region extends Schema
{
    protected Endpoint $endpoint;

    public function parse()
    {
        $this->endpoint = $this->parseEntity('endpoint', Endpoint::class);
    }
}
