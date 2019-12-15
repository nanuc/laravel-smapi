<?php

namespace Nanuc\Smapi\Schemas;

class Locale extends Schema
{
    public ?string $name = null;
    public ?string $summary = null;
    public ?string $description = null;
    public ?string $smallIconUri = null;
    public ?string $largeIconUri = null;
    public ?array $examplePhrases = null;
    public ?array $keywords = null;
    public ?string $updatesDescription = null;
    
    public function parse()
    {
        $this->name = $this->parseEntity('name');
        $this->description = $this->parseEntity('description');
        $this->summary = $this->parseEntity('summary');
        $this->smallIconUri = $this->parseEntity('smallIconUri');
        $this->largeIconUri = $this->parseEntity('largeIconUri');
        $this->examplePhrases = $this->parseArray('examplePhrase');
        $this->keywords = $this->parseArray('keyword');
        $this->updatesDescription = $this->parseEntity('updatesDescription');
    }
}
