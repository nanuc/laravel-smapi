<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Nanuc\Smapi\Resources\ManifestResource;
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
    public function createSkill($vendorId, Manifest $manifest)
    {
        $this->useStage = false;
        $this->useSkillId = false;
        
        return $this->post('skills', [
            'vendorId' => $vendorId,
            'manifest' => new ManifestResource($manifest),
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#update-a-skill
     */
    public function updateSkill(Manifest $manifest)
    {
        $this->put('manifest', [
            'manifest' => new ManifestResource($manifest),
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-operations.html#get-skill-status
     */
    public function getStatus()
    {
        $this->useStage = false;
        return $this->get('status');
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
        $this->useStage = false;
        return $this->delete();
    }
}
