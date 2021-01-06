<?php

namespace Nanuc\Smapi\Models;

use Nanuc\Smapi\SmapiEndpoints\Catalog\Management;

class Catalog extends SmapiModel
{
    protected $catalogId;

    public function __construct($catalogId = null, $provisioningInfo = null)
    {
        $this->catalogId = $catalogId;
        parent::__construct($provisioningInfo);
    }

    public function getCatalogId()
    {
        return $this->catalogId;
    }

    public function management()
    {
        return new Management($this);
    }
}
