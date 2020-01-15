<?php

namespace Nanuc\Smapi\Schemas;

class LanguageModel extends Schema
{
    public $invocationName = null;
    public $intents = null;
    public $types = null;

    public function parse()
    {
        $this->invocationName = $this->parseEntity('invocationName');
        $this->intents = $this->parseArray('intents', Intent::class);
        $this->types = $this->parseArray('types', SlotType::class);
    }
}
