<?php

namespace Nanuc\Smapi\Schemas;

class DialogIntentSlot extends Schema
{
    public $name = null;
    public $type = null;
    public $confirmationRequired;
    public $elicitationRequired;
    public $prompts = [];

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->type = $this->parseEntity('type');
        $this->confirmationRequired = $this->parseEntity('confirmationRequired');
        $this->elicitationRequired = $this->parseEntity('elicitationRequired');
        $this->prompts = $this->parseArray('prompts', null, true);
    }
}
