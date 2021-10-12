<?php

namespace Nanuc\Smapi\Schemas;

class CloneLocale extends Schema
{
    public $source = null;
    public $targets = null;

    public function parse()
    {
        $this->source = $this->parseEntity('source');
        $this->targets = $this->parseArray('targets');
    }
}
