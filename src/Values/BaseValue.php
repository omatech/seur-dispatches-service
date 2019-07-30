<?php

namespace Omatech\SeurDispatchesService\Values;


class BaseValue
{
    private $value;

    /**
     * BaseValue constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }
}