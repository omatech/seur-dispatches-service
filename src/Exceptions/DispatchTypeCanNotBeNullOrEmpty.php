<?php

namespace Omatech\SeurDispatchesService\Exceptions;


use Throwable;

class DispatchTypeCanNotBeNullOrEmpty extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'Dispatch type can\'t be null or empty';
        parent::__construct($message, $code, $previous);
    }
}