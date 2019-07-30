<?php

namespace Omatech\SeurDispatchesService\Exceptions;


use Throwable;

class IncorrectCallResponse extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'Incorrect response';
        parent::__construct($message, $code, $previous);
    }
}