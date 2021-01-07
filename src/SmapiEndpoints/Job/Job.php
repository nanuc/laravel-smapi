<?php

namespace Nanuc\Smapi\SmapiEndpoints\Job;

use Nanuc\Smapi\Models\Product;
use Nanuc\Smapi\SmapiEndpoints\SmapiEndpoint;

class Job extends SmapiEndpoint
{
    protected $job;

    protected $useJobId = true;

    protected $endpoint;

    public function __construct(\Nanuc\Smapi\Models\Job $job, $provisioningInfo = [])
    {
        $this->job = $job;
        parent::__construct($provisioningInfo);
    }

    protected function getJob()
    {
        return $this->job;
    }

    protected function getUri()
    {
        return 'skills/api/custom/interactionModel/jobs/' .
            ($this->useJobId ? $this->getJob()->getJobId() : '') .
            (strlen($this->endpoint) ? '/' . $this->endpoint : '');
    }
}
