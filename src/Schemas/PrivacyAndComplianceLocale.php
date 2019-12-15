<?php

namespace Nanuc\Smapi\Schemas;

class PrivacyAndComplianceLocale extends Schema
{
    public ?string $privacyPolicyUrl = null;
    public ?string $termsOfUse = null;
    
    public function parse()
    {
        $this->privacyPolicyUrl = $this->parseEntity('privacyPolicyUrl');
        $this->termsOfUse = $this->parseEntity('termsOfUse');
    }
}
