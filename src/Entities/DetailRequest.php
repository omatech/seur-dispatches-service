<?php

namespace Omatech\SeurDispatchesService\Entities;


use Omatech\SeurDispatchesService\Values\Dispatch\Type;

class DetailRequest
{
    private $in0;
    private $in1;
    private $in2;
    private $in3;

    /**
     * DetailRequest constructor.
     * @param $in0
     * @param $in1
     * @param $in2
     * @param $in3
     */
    public function __construct(Type $in0, $in1, $in2, $in3)
    {
        $this->in0 = $in0;
        $this->in1 = $in1;
        $this->in2 = $in2;
        $this->in3 = $in3;
    }

    /**
     * @return mixed
     */
    public function in0()
    {
        return $this->in0->value();
    }

    /**
     * @return mixed
     */
    public function in1()
    {
        return $this->in1;
    }

    /**
     * @return mixed
     */
    public function in2()
    {
        return $this->in2;
    }

    /**
     * @return mixed
     */
    public function in3()
    {
        return $this->in3;
    }
}