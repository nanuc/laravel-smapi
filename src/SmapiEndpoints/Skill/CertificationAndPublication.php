<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

class CertificationAndPublication extends Skill
{
    protected $useStage = false;

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#submit-for-certification
     */
    public function submitForCertification()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#publish-skill
     */
    public function publishCertifiedSkill()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#get-publishing-details
     */
    public function getCurrentPublishingDetails()
    {
        return $this->get('publications/~latest');
    }

    /**
     * https://developer.amazon.com/de/docs/smapi/skill-certification-operations.html#get-certifications
     */
    public function getCertificationReviews()
    {
        return $this->get('certifications');
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#get-certification-details
     */
    public function getCertificationDetails()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#withdraw-from-certification
     */
    public function withdrawFromCertification()
    {
        //
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#hide-remove-unpublish
     */
    public function hideOrRemove($type = 'REMOVE', $reason = 'Other')
    {
        return $this->post('unpublish', compact('type', 'reason'));
    }
}
