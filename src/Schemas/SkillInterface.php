<?php

namespace Nanuc\Smapi\Schemas;

class SkillInterface extends Schema
{
    public $type = null;

    public function parse()
    {
        $this->type = $this->parseEntity('type');
    }
}
