<?php

namespace Nanuc\Smapi\Schemas;

class Endpoint extends Schema
{
    public ?string $uri = null;
    public ?string $sslCertificateType = null;

    public function parse()
    {
        $this->uri = $this->parseEntity('uri');
        $this->sslCertificateType = $this->parseEntity('sslCertificateType');
    }
}
