<?php

namespace Omatech\SeurDispatchesService\Exceptions;

use Throwable;

class IncorrectDispatchType extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'Incorrect dispatch type. Try \'L\' or \'S\'.';
        parent::__construct($message, $code, $previous);
    }
}