<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Illuminate\Support\Arr;

class DevelopmentNotifications extends Skill
{
    protected $useStage = false;
    protected $useSkillId = false;
    protected $version = 'v0';

    /**
     * https://developer.amazon.com/en-US/docs/alexa/sdns/skill-development-notifications-api.html#create-a-subscription
     */
    public function createSubscription($vendorId, $subscriberId, $name, $events)
    {
        $headers = [];
        $this->post('developmentEvents/subscriptions', compact('vendorId', 'subscriberId', 'name', 'events'), $headers);

        return Arr::last(explode('/', Arr::get($headers, 'Location.0')));
    }

    /**
     * https://developer.amazon.com/pt-BR/docs/alexa/sdns/skill-development-notifications-api.html#delete-a-subscription
     */
    public function deleteSubscription($subscriptionId)
    {
        $this->delete('developmentEvents/subscriptions/' . $subscriptionId);
    }
}
