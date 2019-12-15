<?php

namespace Nanuc\Smapi\Schemas;

class InteractionModel extends Schema
{
    public ?LanguageModel $languageModel = null;
    public ?Dialog $dialog = null;
    public ?array $prompts = null;

    public function parse()
    {
        $this->languageModel = $this->parseEntity('languageModel', LanguageModel::class);
    }
}
