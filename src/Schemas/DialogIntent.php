<?php

namespace Nanuc\Smapi\Schemas;

class DialogIntent extends Schema
{
    public $name = null;
    public $delegationStrategy;
    public $slots = [];
    public $confirmationRequired;
    public $prompts = [];

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->delegationStrategy = $this->parseEntity('delegationStrategy');
        $this->slots = $this->parseArray('slots', Slot::class);
        $this->confirmationRequired = $this->parseEntity('confirmationRequired');
        $this->prompts = $this->parseArray('prompts', null, true);
    }
}
