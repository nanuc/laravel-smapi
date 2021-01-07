<?php

namespace Nanuc\Smapi\Models;

use Nanuc\Smapi\SmapiEndpoints\Job\Management;

class Job extends SmapiModel
{
    protected $jobId;

    public function __construct($jobId = null, $provisioningInfo = null)
    {
        $this->jobId = $jobId;
        parent::__construct($provisioningInfo);
    }

    public function getJobId()
    {
        return $this->jobId;
    }

    public function management()
    {
        return new Management($this);
    }
}
