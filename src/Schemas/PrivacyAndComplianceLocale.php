<?php

namespace Nanuc\Smapi\Schemas;

class PrivacyAndComplianceLocale extends Schema
{
    public $privacyPolicyUrl = null;
    public $termsOfUse = null;
    
    public function parse()
    {
        $this->privacyPolicyUrl = $this->parseEntity('privacyPolicyUrl');
        $this->termsOfUse = $this->parseEntity('termsOfUse');
    }
}
