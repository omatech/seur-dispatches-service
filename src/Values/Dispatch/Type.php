<?php

namespace Omatech\SeurDispatchesService\Values\Dispatch;

use Omatech\SeurDispatchesService\Exceptions\DispatchTypeCanNotBeNullOrEmpty;
use Omatech\SeurDispatchesService\Exceptions\IncorrectDispatchType;
use Omatech\SeurDispatchesService\Values\BaseValue;

class Type extends BaseValue
{
    /**
     * Type constructor.
     * @param string $value
     * @throws DispatchTypeCanNotBeNullOrEmpty
     * @throws IncorrectDispatchType
     */
    public function __construct(string $value)
    {
        if (is_null($value)) {
            throw new DispatchTypeCanNotBeNullOrEmpty();
        }

        if (!in_array($value, ['L', 'S'])) {
            throw new IncorrectDispatchType();
        }

        parent::__construct($value);
    }
}