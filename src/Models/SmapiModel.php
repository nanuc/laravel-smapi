<?php

namespace Nanuc\Smapi\Models;

use Nanuc\Smapi\Exceptions\SmapiException;
use Nanuc\Smapi\SmapiEndpoints\Skill\VendorManagement;

class SmapiModel
{
    protected $stage = 'development';

    protected $provisioningInfo;

    public function __construct($provisioningInfo = null)
    {
        $this->provisioningInfo = $provisioningInfo;
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


    public function vendorManagement()
    {
        return new VendorManagement($this);
    }
}
