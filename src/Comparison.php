<?php

namespace AaronAdrian\StringOperatorComparison;

class Comparison
{
    protected $first;
    protected $second;
    protected $operator;

    /**
     * Comparison constructor.
     * @param $first
     * @param string $operator
     * @param $second
     */
    public function __construct($first, $operator, $second)
    {
        $this->first = $first;
        $this->operator = new Operator($operator);
        $this->second = $second;
    }

    /**
     * @return bool
     */
    public function compare()
    {
        return $this->operator->compare($this->first, $this->second);
    }

    /**
     * @return bool
     */
    public function passes()
    {
        return $this->compare();
    }

    /**
     * @param $first
     * @param $operator
     * @param $second
     *
     * @return bool
     */
    public static function make($first, $operator, $second)
    {
        return (new static($first, $operator, $second))->compare();
    }
}