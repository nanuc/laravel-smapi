<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

class Metrics extends Skill
{
    protected $endpoint = 'metrics';

    protected $useStage = false;

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/metrics-api.html
     */
    public function getMetrics()
    {
        //
    }
}
