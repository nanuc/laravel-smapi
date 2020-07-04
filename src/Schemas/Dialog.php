<?php

namespace Nanuc\Smapi\Schemas;

class Dialog extends Schema
{
    public $delegationStrategy;
    public $intents = [];

    public function parse()
    {
        $this->delegationStrategy = $this->parseEntity('delegationStrategy');
        $this->intents = $this->parseArray('intents', DialogIntent::class);
    }
}
