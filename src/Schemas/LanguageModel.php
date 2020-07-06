<?php

namespace Nanuc\Smapi\Schemas;

class LanguageModel extends Schema
{
    public $invocationName;
    public $intents;
    public $types;
    public $modelConfiguration = [];

    public function parse()
    {
        $this->invocationName = $this->parseEntity('invocationName');
        $this->intents = $this->parseArray('intents', Intent::class);
        $this->types = $this->parseArray('types', SlotType::class);
        $this->modelConfiguration = $this->parseArray('modelConfiguration', null, true);
    }
}
