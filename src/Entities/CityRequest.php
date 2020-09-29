<?php
/**
 * Author: adriaroca
 * Date: 29/09/20 15:47
 */

namespace Omatech\SeurDispatchesService\Entities;


class CityRequest
{
    private $in0;
    private $in1;
    private $in2;
    private $in3;
    private $in4;
    private $in5;
    private $in6;

    public function __construct(
        $in0,
        $in1,
        $in2,
        $in3,
        $in4,
        $in5,
        $in6
    )
    {

        $this->in0 = $in0;
        $this->in1 = $in1;
        $this->in2 = $in2;
        $this->in3 = $in3;
        $this->in4 = $in4;
        $this->in5 = $in5;
        $this->in6 = $in6;
    }

    /**
     * @return mixed
     */
    public function in0()
    {
        return $this->in0;
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

    /**
     * @return mixed
     */
    public function in4()
    {
        return $this->in4;
    }

    /**
     * @return mixed
     */
    public function in5()
    {
        return $this->in5;
    }

    /**
     * @return mixed
     */
    public function in6()
    {
        return $this->in6;
    }
    
}