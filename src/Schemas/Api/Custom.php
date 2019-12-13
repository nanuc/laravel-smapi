<?php

namespace Nanuc\Smapi\Schemas\Api;

use Nanuc\Smapi\Schemas\Endpoint;
use Nanuc\Smapi\Schemas\Region;
use Nanuc\Smapi\Schemas\SkillInterface;

class Custom extends Api
{
    protected Endpoint $endpoint;
    protected array $regions;
    protected array $interfaces;

    public function parse()
    {
        $this->endpoint = $this->parseEntity('endpoint', Endpoint::class);
        $this->regions = $this->parseArray('regions', Region::class, true);
        $this->interfaces = $this->parseArray('interfaces', SkillInterface::class, true);
    }
}
