<?php

namespace Nanuc\Smapi\Schemas;

class Events extends Schema
{
    public $publications = [];
    public $subscriptions = [];
    public $endpoint = null;

    public function parse()
    {
        $this->publications = $this->parseArray('publications', Publication::class);
        $this->subscriptions = $this->parseArray('subscriptions', Subscription::class);
        $this->endpoint = $this->parseEntity('endpoint', Endpoint::class);
    }
}
