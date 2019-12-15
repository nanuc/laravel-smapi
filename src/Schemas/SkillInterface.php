<?php

namespace Nanuc\Smapi\Schemas;

class SkillInterface extends Schema
{
    public ?string $type = null;

    public function parse()
    {
        $this->type = $this->parseEntity('type');
    }
}
