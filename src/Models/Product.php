<?php

namespace Nanuc\Smapi\Models;

use Nanuc\Smapi\SmapiEndpoints\ISP\Management;

class Product extends SmapiModel
{
    protected $productId;

    public function __construct($productId = null, $provisioningInfo = null)
    {
        $this->productId = $productId;
        parent::__construct($provisioningInfo);
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function management()
    {
        return new Management($this);
    }
}
