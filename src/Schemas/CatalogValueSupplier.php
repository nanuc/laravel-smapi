<?php

namespace Nanuc\Smapi\Schemas;

class CatalogValueSupplier extends Schema
{
    protected $catalog;

    public $version;

    public function __construct(\Nanuc\Smapi\Models\Catalog $catalog, $version = 1)
    {
        $this->catalog = $catalog;
        $this->version = $version;
    }

    public function getCatalog()
    {
        return $this->catalog;
    }
}
