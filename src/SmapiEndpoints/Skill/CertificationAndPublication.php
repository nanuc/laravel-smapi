<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Illuminate\Support\Arr;

class CertificationAndPublication extends Skill
{
    protected $useStage = false;

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#submit-for-certification
     */
    public function submitForCertification($publish = true)
    {
        $response = $this->post('submit', [
            'publicationMethod' => $publish ? 'AUTO_PUBLISHING' : 'MANUAL_PUBLISHING'
        ], $headers);
        return Arr::get($headers, 'Location');
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#publish-skill
     */
    public function publishCertifiedSkill($publishesAt = null)
    {
        $data = $publishesAt ? ['publishesAt' => $publishesAt->toIso8601ZuluString()] : [];

        return $this->post('publications', $data);
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
    public function getCertificationDetails($certificationId)
    {
        return $this->get('certifications/' . $certificationId);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#withdraw-from-certification
     */
    public function withdrawFromCertification()
    {
        return $this->post('withdraw', [
            'reason' => 'DISCOVERED_ISSUE'
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-certification-operations.html#hide-remove-unpublish
     */
    public function hideOrRemove($type = 'REMOVE', $reason = 'Other')
    {
        return $this->post('unpublish', compact('type', 'reason'));
    }
}