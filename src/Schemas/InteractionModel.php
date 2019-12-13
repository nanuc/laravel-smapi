<?php

namespace Nanuc\Smapi\Schemas;

class InteractionModel extends Schema
{
    protected LanguageModel $languageModel;
    protected Dialog $dialog;
    protected array $prompts;

    public function parse()
    {
        $this->languageModel = $this->parseEntity('languageModel', LanguageModel::class);
    }
}
