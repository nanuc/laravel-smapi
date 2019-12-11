<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

class Management extends Skill
{
    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#get-skill-information
     */
    public function getSkillInformation()
    {
        return $this->get('manifest');
    }
}
