<?php

namespace Nanuc\Smapi\SmapiEndpoints\ISP;

use Nanuc\Smapi\Models\Product;
use Nanuc\Smapi\SmapiEndpoints\SmapiEndpoint;

class ISP extends SmapiEndpoint
{
    protected $product;

    protected $useStage = true;

    protected $endpoint;

    public function __construct(Product $product, $provisioningInfo = [])
    {
        $this->product = $product;
        parent::__construct($provisioningInfo);
    }

    protected function getUri()
    {
        return 'inSkillProducts/' . $this->product->getProductId() .
            ($this->useStage ? '/stages/' . $this->product->getStage() : '') .
            ($this->endpoint && strlen($this->endpoint) ? '/' . $this->endpoint : '');
    }
}
