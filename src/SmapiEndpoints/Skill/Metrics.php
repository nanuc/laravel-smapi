<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Carbon\Carbon;

class Metrics extends Skill
{
    protected $endpoint = 'metrics';

    protected $useStage = false;

    protected $version = 'v2';

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/metrics-api.html#get-metrics
     */
    public function getMetrics($startTime, $endTime, $metricQueries)
    {
        return $this->post(data: [
            'startTime' => 1000 * Carbon::parse($startTime)->unix(),
            'endTime' => 1000 * Carbon::parse($endTime)->unix(),
            'metricQueries' => $metricQueries,
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/metrics-api.html#list-metrics
     */
    public function listMetrics($namespace = 'Alexa.Custom')
    {
        $this->useSkillId = false;
        return $this->get('skills/metrics?metricNamespace=' . $namespace);
    }
}
