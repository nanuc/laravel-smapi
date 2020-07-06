<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill\Testing;

use Nanuc\Smapi\Resources\ManifestResource;
use Nanuc\Smapi\Schemas\Manifest;
use Nanuc\Smapi\SmapiEndpoints\Skill\Skill;

class Testing extends Skill
{
    protected $useStage = false;

    public function betaTesting()
    {
        return new BetaTesting($this->skill);
    }

    public function invocation()
    {
        return new Invocation($this->skill);
    }

    public function nluEvaluationTool()
    {
        return new NLUEvaluationTool($this->skill);
    }

    public function simulation()
    {
        return new Simulation($this->skill);
    }

    public function utteranceConflictDetection()
    {
        return new UtteranceConflictDetection($this->skill);
    }

    public function utteranceProfiler()
    {
        return new UtteranceProfiler($this->skill);
    }

    public function validation()
    {
        return new Validation($this->skill);
    }
}
