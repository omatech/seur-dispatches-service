<?php

namespace Omatech\SeurDispatchesService\Exceptions;


use Throwable;

class ThereAreNotCitiesWithThisName extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'There aren\'t cities with this name.';
        parent::__construct($message, $code, $previous);
    }
}