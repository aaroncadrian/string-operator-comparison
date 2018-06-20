<?php

namespace AaronAdrian\StringOperatorComparison;

use AaronAdrian\StringOperatorComparison\Exceptions\InvalidOperatorType;

class Operator
{
    protected $operator;

    /**
     * Operator constructor.
     * @param string $operator
     * @throws InvalidOperatorType
     */
    public function __construct($operator)
    {
        try {
            new OperatorType($operator);
        } catch (\UnexpectedValueException $exception) {
            throw new InvalidOperatorType($operator, $exception);
        }

        $this->operator = $operator;
    }

    /**
     * @param $first
     * @param $second
     *
     * @return bool
     */
    public function compare($first, $second)
    {
        switch ($this->operator) {
            case '<':
                return $first < $second;
            case '<=':
                return $first <= $second;
            case '>':
                return $first > $second;
            case '>=':
                return $first >= $second;
            case '=':
                return $first == $second;
            case '==':
                return $first == $second;
            case '===':
                return $first === $second;
            case '!=':
                return $first != $second;
            case '<>':
                return $first != $second;
            case '!==':
                return $first !== $second;
        }

        return false;
    }

}