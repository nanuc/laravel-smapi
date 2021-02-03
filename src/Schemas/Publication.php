<?php

namespace Nanuc\Smapi\Schemas;

class Publication extends Schema
{
    public $eventName = null;

    public function parse()
    {
        $this->eventName = $this->parseEntity('eventName');
    }
}
