<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

class Credentials extends Skill
{
    protected $useStage = false;

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-credentials-api.html
     */
    public function getCredentials()
    {
        return $this->get('credentials');
    }
}
