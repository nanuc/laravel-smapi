<?php

namespace Nanuc\Smapi\Exceptions;

use Exception;
use Nanuc\Smapi\Lib\Error;

class SmapiException extends Exception
{
    protected $error;
    protected $originalMessage;

    public function __construct($exceptionContents)
    {
        $this->originalMessage = $exceptionContents;
        $this->error = Error::fromJson($exceptionContents);
        parent::__construct($this->error->message);
    }

    public function getError()
    {
        return $this->error;
    }

    public function getOriginalMessage()
    {
        return $this->originalMessage;
    }
}
