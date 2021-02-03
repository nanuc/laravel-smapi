<?php

namespace Nanuc\Smapi\Schemas;

class Events extends Schema
{
    public $publications = null;
    public $endpoint = null;

    public function parse()
    {
        $this->publications = $this->parseArray('publications', Publication::class);
        $this->endpoint = $this->parseEntity('endpoint', Endpoint::class);
    }
}
