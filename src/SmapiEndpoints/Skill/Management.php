<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Nanuc\Smapi\Schemas\Manifest;

class Management extends Skill
{
    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#get-skill-information
     */
    public function getSkillInformation()
    {
        return Manifest::fromJSON($this->get('manifest')->manifest);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#create-a-skill
     */
    public function createSkill()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#update-a-skill
     */
    public function updateSkill()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#get-skill-status
     */
    public function getStatus()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#list-skills
     */
    public function listSkills($vendorId)
    {
        $this->useStage = false;
        $this->useSkillId = false;
        return $this->get('skills?vendorId='.$vendorId);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#delete-a-skill
     */
    public function deleteSkill()
    {
        //
    }
}
