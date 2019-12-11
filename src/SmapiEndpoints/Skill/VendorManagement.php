<?php

namespace Nanuc\Smapi\SmapiEndpoints\Skill;

use Nanuc\Smapi\SmapiEndpoints\SmapiEndpoint;

class VendorManagement extends SmapiEndpoint
{
    protected $endpoint = 'vendors';

    /**
     * https://developer.amazon.com/en-US/docs/alexa/smapi/vendor-operations.html#get-vendor-list
     */
    public function getVendorList()
    {
        return $this->get();
    }
}
