<?php

namespace Nanuc\Smapi\Models;

class Skill extends SmapiModel
{
    protected $skillId;

    protected $endpointNamespace = 'Nanuc\\Smapi\\SmapiEndpoints\\Skill\\';

    public function __construct($skillId = null, $provisioningInfo = null)
    {
        $this->skillId = $skillId;
        parent::__construct($provisioningInfo);
    }

    public function getSkillId()
    {
        return $this->skillId;
    }
}
