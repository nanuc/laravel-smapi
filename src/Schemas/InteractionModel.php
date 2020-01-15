<?php

namespace Nanuc\Smapi\Schemas;

class InteractionModel extends Schema
{
    public $languageModel = null;
    public $dialog = null;
    public $prompts = null;

    public function parse()
    {
        $this->languageModel = $this->parseEntity('languageModel', LanguageModel::class);
    }
}
