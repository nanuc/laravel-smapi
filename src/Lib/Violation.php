<?php

namespace Nanuc\Smapi\Lib;

use Illuminate\Support\Arr;

class Violation
{
    public $code;
    public $message;
    public $validationDetails;

    public function __construct($violationData)
    {
        $this->code = Arr::get($violationData, 'code');
        $this->message = Arr::get($violationData, 'message');
        $this->validationDetails = Arr::get($violationData, 'validationDetails');
    }
}
