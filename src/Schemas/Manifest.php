<?php

namespace Nanuc\Smapi\Schemas;

class Manifest extends Schema
{
    protected string $manifestVersion;
    protected PublishingInformation $publishingInformation;
    protected PrivacyAndCompliance $privacyAndCompliance;
    protected array $permissions;
    protected Events $event;
    protected array $apis;
    
    public function parse()
    {
        $this->manifestVersion = $this->parseEntity('manifestVersion');
        $this->publishingInformation = $this->parseEntity('publishingInformation', PublishingInformation::class);
        $this->privacyAndCompliance = $this->parseEntity('privacyAndCompliance', PrivacyAndCompliance::class);
        $this->permissions = $this->parseArray('permissions', Permission::class);
        $this->apis = $this->parseArray('apis', Apis\Api::class, true);
    }
}
