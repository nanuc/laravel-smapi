<?php

namespace Nanuc\Smapi\Schemas;

class Endpoint extends Schema
{
    public $uri = null;
    public $sslCertificateType = null;

    public function parse()
    {
        $this->uri = $this->parseEntity('uri');
        $this->sslCertificateType = $this->parseEntity('sslCertificateType');
    }
}
