<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Nanuc\Smapi\SmapiEndpoints\SmapiEndpoint;
use Nanuc\Smapi\Models\Skill as SkillModel;

class Skill extends SmapiEndpoint
{
    protected $skill;

    protected $useStage = true;

    protected $useSkillId = true;

    protected $endpoint;

    public function __construct(SkillModel $skill)
    {
        $this->skill = $skill;
        parent::__construct($skill->getProvisioningInfo());
    }

    public function getSkill()
    {
        return $this->skill;
    }

    protected function getUri()
    {
        return
            ($this->useSkillId ? 'skills/' . $this->skill->getSkillId() . '/' : '') .
            ($this->useStage ? 'stages/' . $this->skill->getStage() . '/' : '') .
            (strlen($this->endpoint) ? $this->endpoint : '');
    }
}
