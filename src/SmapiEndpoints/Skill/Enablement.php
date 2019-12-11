<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

class Enablement extends Skill
{
    protected $endpoint = 'enablement';

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-enablement.html#enable-a-skill
     */
    public function enable()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-enablement.html#check-enablement-status-of-a-skill
     */
    public function checkEnablementStatus()
    {
        return $this->getHttpStatus() == 204;
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-enablement.html#disable-a-skill
     */
    public function disable()
    {
        //
    }
}
