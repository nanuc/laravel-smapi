<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill\Testing;

use Illuminate\Support\Arr;
use Nanuc\Smapi\Resources\ManifestResource;
use Nanuc\Smapi\Schemas\Testing\BetaTest;
use Nanuc\Smapi\Schemas\Manifest;
use Nanuc\Smapi\SmapiEndpoints\Skill\Skill;

class BetaTesting extends Testing
{
    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#get-beta-test
     */
    public function getBetaTest()
    {
        return BetaTest::fromJSON($this->get('betaTest'));
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#create-beta-test
     */
    public function createBetaTest($feedbackEmail = null)
    {
        return $this->post('betaTest', [
            'feedbackEmail' => $feedbackEmail,
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#update-beta-test
     */
    public function updateBetaTest($feedbackEmail = null)
    {
        return $this->put('betaTest', [
            'feedbackEmail' => $feedbackEmail,
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#start-beta-test
     */
    public function startBetaTest()
    {
        return $this->post('betaTest/start');
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#end-beta-test
     */
    public function endBetaTest()
    {
        return $this->post('betaTest/end');
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#get-list-of-testers-for-a-beta-test
     */
    public function getListOfTesters()
    {
        return $this->get('betaTest/testers');
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#add-testers-to-a-beta-test
     */
    public function addTester($emailId)
    {
        return $this->post('betaTest/testers/add', [
            'testers' => [
                ['emailId' => $emailId]
            ]
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#remove-testers-from-a-beta-test
     */
    public function removeTester($emailId)
    {
        return $this->post('betaTest/testers/remove', [
            'testers' => [
                ['emailId' => $emailId]
            ]
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#send-reminder-to-testers
     */
    public function sendReminderToTesters($emailId)
    {
        return $this->post('betaTest/testers/sendReminder', [
            'testers' => [
                ['emailId' => $emailId]
            ]
        ]);
    }

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/skill-beta-testing-api.html#request-feedback-from-testers
     */
    public function requestFeedbackFromTesters($emailId)
    {
        return $this->post('betaTest/testers/requestFeedback', [
            'testers' => [
                ['emailId' => $emailId]
            ]
        ]);
    }


}
