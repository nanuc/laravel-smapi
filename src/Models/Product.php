<?php

namespace Nanuc\Smapi\Models;

class Product extends SmapiModel
{
    protected $productId;

    protected $endpointNamespace = 'Nanuc\\Smapi\\SmapiEndpoints\\ISP\\';

    public function __construct($productId = null, $provisioningInfo = null)
    {
        $this->productId = $productId;
        parent::__construct($provisioningInfo);
    }

    public function getProductId()
    {
        return $this->productId;
    }
}
