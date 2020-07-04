<?php

namespace Nanuc\Smapi\Schemas;

/*
 * Class name "Interface" is prohibited in PHP
 */

class InterfaceSchema extends Schema
{
    public $type = null;
    public $supportedViewports = null;

    public function parse()
    {
        // ToDo: does not work yet
        $this->supportedViewports = $this->parseArray('supportedViewports');
    }
}
