<?php

namespace Nanuc\Smapi\Schemas\Testing;

use Nanuc\Smapi\Schemas\Schema;

class BetaTest extends Schema
{
    public $expiryDate;
    public $status;
    public $feedbackEmail;
    public $invitationUrl;
    public $invitesRemaining;

    public function parse()
    {
        $this->expiryDate = $this->parseEntity('expiryDate');
        $this->status = $this->parseEntity('status');
        $this->feedbackEmail = $this->parseEntity('feedbackEmail');
        $this->invitationUrl = $this->parseEntity('invitationUrl');
        $this->invitesRemaining = $this->parseEntity('invitesRemaining');
    }
}
