<?php

namespace Nanuc\Smapi\Schemas;

class PrivacyAndComplianceLocale extends Schema
{
    protected string $privacyPolicyUrl;
    protected string $termsOfUse;
    
    public function parse()
    {
        $this->privacyPolicyUrl = $this->parseEntity('privacyPolicyUrl');
        $this->termsOfUse = $this->parseEntity('termsOfUse');
    }
}
