<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

class CertificationAndPublication extends Skill
{
    protected $useStage = false;

    /**
     * https://developer.amazon.com/de/docs/smapi/skill-certification-operations.html#get-certifications
     */
    public function getCertificationReviews()
    {
        return $this->get('certifications');
    }
}
