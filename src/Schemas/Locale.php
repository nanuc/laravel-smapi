<?php

namespace Nanuc\Smapi\Schemas;

class Locale extends Schema
{
    public $name = null;
    public $summary = null;
    public $description = null;
    public $smallIconUri = null;
    public $largeIconUri = null;
    public $examplePhrases = null;
    public $keywords = null;
    public $updatesDescription = null;
    
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
