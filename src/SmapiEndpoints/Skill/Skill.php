<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Nanuc\Smapi\SmapiEndpoints\SmapiEndpoint;
use Nanuc\Smapi\Models\Skill as SkillModel;

class Skill extends SmapiEndpoint
{
    protected $skill;

    protected $useStage = true;

    protected $endpoint;

    public function __construct(SkillModel $skill, $provisioningInfo = [])
    {
        $this->skill = $skill;
        parent::__construct($provisioningInfo);
    }

    protected function getUri()
    {
        return 'skills/' . $this->skill->getSkillId() .
            ($this->useStage ? '/stages/' . $this->skill->getStage() : '') .
            (strlen($this->endpoint) ? '/' . $this->endpoint : '');
    }
}
