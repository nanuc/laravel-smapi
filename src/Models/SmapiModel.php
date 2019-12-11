<?php

namespace Nanuc\Smapi\Models;

use Illuminate\Support\Str;
use Nanuc\Smapi\Exceptions\SmapiException;

abstract class SmapiModel
{
    protected $stage = 'development';

    protected $provisioningInfo;

    public function __construct($provisioningInfo = null)
    {
        $this->provisioningInfo = $provisioningInfo;
    }

    public function __call($name, $arguments)
    {
        $class = $this->endpointNamespace . Str::studly($name);
        if(class_exists($class)) {
            return new $class($this);
        }
        else {
            trigger_error('Call to undefined method '.__CLASS__.'::'.$name.'()', E_USER_ERROR);
        }
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
