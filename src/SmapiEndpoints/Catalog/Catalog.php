<?php

namespace Nanuc\Smapi\SmapiEndpoints\Catalog;

use Nanuc\Smapi\Models\Product;
use Nanuc\Smapi\SmapiEndpoints\SmapiEndpoint;

class Catalog extends SmapiEndpoint
{
    protected $catalog;

    protected $useCatalogId = true;

    protected $endpoint;

    public function __construct(\Nanuc\Smapi\Models\Catalog $catalog, $provisioningInfo = [])
    {
        $this->catalog = $catalog;
        parent::__construct($provisioningInfo);
    }

    protected function getCatalog()
    {
        return $this->catalog;
    }

    protected function getUri()
    {
        return 'skills/api/custom/interactionModel/catalogs/' .
            ($this->useCatalogId ? $this->getCatalog()->getCatalogId() : '') .
            (strlen($this->endpoint) ? '/' . $this->endpoint : '');
    }
}
