<?php

namespace Nanuc\Smapi\Schemas;

class Endpoint extends Schema
{
    protected string $uri;
    protected string $sslCertificateType;

    public function parse()
    {
        $this->uri = $this->parseEntity('uri');
        $this->sslCertificateType = $this->parseEntity('sslCertificateType');
    }
}
