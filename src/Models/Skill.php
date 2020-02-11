<?php

namespace Nanuc\Smapi\Models;

use Nanuc\Smapi\SmapiEndpoints\Skill\AccountLinkingManagement;
use Nanuc\Smapi\SmapiEndpoints\Skill\CertificationAndPublication;
use Nanuc\Smapi\SmapiEndpoints\Skill\Credentials;
use Nanuc\Smapi\SmapiEndpoints\Skill\DevelopmentNotifications;
use Nanuc\Smapi\SmapiEndpoints\Skill\Enablement;
use Nanuc\Smapi\SmapiEndpoints\Skill\InSkillProductManagement;
use Nanuc\Smapi\SmapiEndpoints\Skill\IntentRequestHistory;
use Nanuc\Smapi\SmapiEndpoints\Skill\InteractionModelOperations;
use Nanuc\Smapi\SmapiEndpoints\Skill\Management;
use Nanuc\Smapi\SmapiEndpoints\Skill\Metrics;
use Nanuc\Smapi\SmapiEndpoints\Skill\PackageManagement;
use Nanuc\Smapi\SmapiEndpoints\Skill\VendorManagement;

class Skill extends SmapiModel
{
    protected $skillId;

    public function __construct($skillId = null, $provisioningInfo = null)
    {
        $this->skillId = $skillId;
        parent::__construct($provisioningInfo);
    }

    public function getSkillId()
    {
        return $this->skillId;
    }

    public function accountLinkingManagement()
    {
        return new AccountLinkingManagement($this);
    }

    public function certificationAndPublication()
    {
        return new CertificationAndPublication($this);
    }

    public function credentials()
    {
        return new Credentials($this);
    }

    public function enablement()
    {
        return new Enablement($this);
    }

    public function inSkillProductManagement()
    {
        return new InSkillProductManagement($this);
    }

    public function intentRequestHistory()
    {
        return new IntentRequestHistory($this);
    }

    public function interactionModelOperations()
    {
        return new InteractionModelOperations($this);
    }

    public function management()
    {
        return new Management($this);
    }

    public function metrics()
    {
        return new Metrics($this);
    }

    public function packageManagement()
    {
        return new PackageManagement($this);
    }

    public function developmentNotifications()
    {
        return new DevelopmentNotifications($this);
    }
}
