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
    public function listSkills()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#delete-a-skill
     */
    public function deleteSkill()
    {
        //
    }
}
