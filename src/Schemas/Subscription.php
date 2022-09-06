<?php

namespace Nanuc\Smapi\Schemas;

class Subscription extends Schema
{
    public $eventName = null;

    public function parse()
    {
        $this->eventName = $this->parseEntity('eventName');
    }
}
