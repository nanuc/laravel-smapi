<?php

namespace Nanuc\Smapi\Lib;

use Illuminate\Support\Arr;

class Error
{
    public $message;
    public $violations = [];

    public static function fromJson($json)
    {
        $data = json_decode($json, true);
        $error = new self;

        $error->setMessage(Arr::get($data, 'message'));
        foreach(Arr::get($data, 'violations', []) as $violationData) {
            $violation = new Violation($violationData);
            $error->addViolation($violation);
        }
        return $error;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function addViolation(Violation $violation)
    {
        $this->violations[] = $violation;
    }
}
