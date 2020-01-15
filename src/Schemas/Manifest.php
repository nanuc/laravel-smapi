<?php

namespace Nanuc\Smapi\Schemas;

use Illuminate\Contracts\Support\Jsonable;

class Manifest extends Schema
{
    public $manifestVersion = null;
    public $publishingInformation = null;
    public $privacyAndCompliance = null;
    public $permissions = null;
    public $event = null;
    public $apis = null;
    
    public function parse()
    {
        $this->manifestVersion = $this->parseEntity('manifestVersion');
        $this->publishingInformation = $this->parseEntity('publishingInformation', PublishingInformation::class);
        $this->privacyAndCompliance = $this->parseEntity('privacyAndCompliance', PrivacyAndCompliance::class);
        $this->permissions = $this->parseArray('permissions', Permission::class);
        $this->apis = $this->parseArray('apis', Api\Api::class, true);
    }
}
