<?php

namespace Omatech\SeurDispatchesService\Exceptions;

use Throwable;

class ServiceNotAvailable extends \Exception
{
    /**
     * ServiceNotAvailable constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $message = 'The requested service is not available';
        parent::__construct($message, $code, $previous);
    }
}