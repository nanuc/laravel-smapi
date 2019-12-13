<?php

namespace Nanuc\Smapi\Schemas;

class Locale extends Schema
{
    protected string $summary;
    protected string $description;
    protected string $smallIconUri;
    protected string $largeIconUri;
    protected array $examplePhrases = [];
    protected array $keywords = [];
    protected string $updatesDescription;
    
    public function parse()
    {
        $this->description = $this->parseEntity('description');
        $this->summary = $this->parseEntity('summary');
        $this->smallIconUri = $this->parseEntity('smallIconUri');
        $this->largeIconUri = $this->parseEntity('largeIconUri');
        $this->examplePhrases = $this->parseArray('examplePhrase');
        $this->keywords = $this->parseArray('keyword');
        $this->updatesDescription = $this->parseEntity('updatesDescription');
    }
}
