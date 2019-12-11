<?php

namespace Nanuc\Smapi\Models;

use Nanuc\Smapi\Exceptions\SmapiException;
use Nanuc\Smapi\SmapiEndpoints\Skill\CertificationAndPublication;
use Nanuc\Smapi\SmapiEndpoints\Skill\Enablement;
use Nanuc\Smapi\SmapiEndpoints\Skill\Management;

class Skill
{
    protected $skillId;

    protected $stage = 'development';

    protected $provisioningInfo;

    public function __construct($skillId = null, $provisioningInfo = null)
    {
        $this->skillId = $skillId;
        $this->provisioningInfo = $provisioningInfo;
    }

    public function enablement()
    {
        return new Enablement($this);
    }

    public function certificationAndPublication()
    {
        return new CertificationAndPublication($this);
    }

    public function management()
    {
        return new Management($this);
    }

    public function getSkillId()
    {
        return $this->skillId;
    }

    /**
     * @param  $stage
     * @return \Nanuc\Smapi\Models\Skill
     * @throws SmapiException
     */
    public function setStage($stage = 'development')
    {
        if(!in_array($stage, ['development', 'live', false])) {
            throw new SmapiException('Stage must be either "development", "live" or false.');
        }

        $this->stage = $stage;

        return $this;
    }

    public function getStage()
    {
        return $this->stage;
    }
}
