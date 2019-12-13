<?php

namespace Nanuc\Smapi\Schemas;

class LanguageModel extends Schema
{
    protected string $invocationName;
    protected array $intents = [];
    protected array $types = [];

    public function parse()
    {
        $this->invocationName = $this->parseEntity('invocationName');
        $this->intents = $this->parseArray('intents', Intent::class);
        $this->types = $this->parseArray('types', SlotType::class);
    }
}
