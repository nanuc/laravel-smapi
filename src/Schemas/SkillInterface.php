<?php

namespace Nanuc\Smapi\Schemas;

class SkillInterface extends Schema
{
    protected string $type;

    public function parse()
    {
        $this->type = $this->parseEntity('type');
    }
}
