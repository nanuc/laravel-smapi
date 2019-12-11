<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

class Enablement extends Skill
{
    protected $endpoint = 'enablement';

    /**
     * https://developer.amazon.com/de/docs/smapi/skill-enablement.html#check-enablement-status-of-a-skill
     */
    public function getStatus()
    {
        return $this->getHttpStatus() == 204;
    }
}
