<?php

namespace Omatech\SeurDispatchesService\Entities;

class ListRequest
{
    /**
     * @var string
     */
    private $in0;
    /**
     * @var string
     */
    private $in1;
    /**
     * @var int
     */
    private $in2;
    /**
     * @var int
     */
    private $in3;
    private $in4;
    private $in5;
    private $in6;
    /**
     * @var string
     */
    private $in7;
    /**
     * @var string
     */
    private $in8;
    /**
     * @var string
     */
    private $in9;
    /**
     * @var string
     */
    private $in10;
    /**
     * @var int
     */
    private $in11;
    /**
     * @var string
     */
    private $in12;
    /**
     * @var string
     */
    private $in13;
    /**
     * @var string
     */
    private $in14;


    /**
     * ListRequest constructor.
     *
     * @param string $in0
     * @param string $in1
     * @param int $in2
     * @param string $in3
     * @param $in4
     * @param $in5
     * @param $in6
     * @param string $in7
     * @param string $in8
     * @param string $in9
     * @param string $in10
     * @param int $in11
     * @param string $in12
     * @param string $in13
     * @param string $in14
     */
    public function __construct(
        string $in0,
        string $in1,
        $in2,
        string $in3,
        $in4,
        $in5,
        $in6,
        string $in7,
        string $in8,
        string $in9,
        string $in10,
        $in11,
        string $in12,
        string $in13,
        string $in14
    )
    {

        $this->in0 = $in0;
        $this->in1 = $in1;
        $this->in2 = $in2;
        $this->in3 = $in3;
        $this->in4 = $in4;
        $this->in5 = $in5;
        $this->in6 = $in6;
        $this->in7 = $in7;
        $this->in8 = $in8;
        $this->in9 = $in9;
        $this->in10 = $in10;
        $this->in11 = $in11;
        $this->in12 = $in12;
        $this->in13 = $in13;
        $this->in14 = $in14;
    }

   /**
     * @return string
     */
    public function in0(): string
    {
        return $this->in0;
    }

    /**
     * @return string
     */
    public function in1(): string
    {
        return $this->in1;
    }

    /**
     * @return int
     */
    public function in2()
    {
        return $this->in2;
    }

    /**
     * @return string
     */
    public function in3(): string
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

    /**
     * @return string
     */
    public function in7(): string
    {
        return $this->in7;
    }

    /**
     * @return string
     */
    public function in8(): string
    {
        return $this->in8;
    }

    /**
     * @return string
     */
    public function in9(): string
    {
        return $this->in9;
    }

    /**
     * @return string
     */
    public function in10(): string
    {
        return $this->in10;
    }

    /**
     * @return int
     */
    public function in11()
    {
        return $this->in11;
    }

    /**
     * @return string
     */
    public function in12(): string
    {
        return $this->in12;
    }

    /**
     * @return string
     */
    public function in13(): string
    {
        return $this->in13;
    }

    /**
     * @return string
     */
    public function in14(): string
    {
        return $this->in14;
    }
}