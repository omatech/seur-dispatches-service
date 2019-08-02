<?php

namespace Omatech\SeurDispatchesService\Exceptions;


use Throwable;

class ThereAreNotDispatchesWithThisReference extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'There aren\'t dispatches with this reference.';
        parent::__construct($message, $code, $previous);
    }
}