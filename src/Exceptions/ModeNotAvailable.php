<?php

namespace Omatech\SeurDispatchesService\Exceptions;


use Throwable;

class ModeNotAvailable extends \Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'Mode not available. Try \'production\', \'pre-production\' or \'development\'.';
        parent::__construct($message, $code, $previous);
    }
}