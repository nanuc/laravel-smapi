<?php

namespace Nanuc\Smapi\Schemas;

class PrivacyAndComplianceLocale extends Schema
{
    public $privacyPolicyUrl = null;
    public $termsOfUseUrl = null;

    public function parse()
    {
        $this->privacyPolicyUrl = $this->parseEntity('privacyPolicyUrl');
        $this->termsOfUseUrl = $this->parseEntity('termsOfUseUrl');
    }
}
