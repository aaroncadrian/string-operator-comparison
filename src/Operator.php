<?php

namespace AaronAdrian\StringOperatorComparison;

class Operator
{
    public const LESS_THAN = '<';
    public const LESS_THAN_OR_EQUAL_TO = '<=';
    public const GREATER_THAN = '>';
    public const GREATER_THAN_OR_EQUAL_TO = '>=';
    public const EQUALS = '=';
    public const EQUAL_TO = '==';
    public const IDENTICAL_TO = '===';
    public const DOES_NOT_EQUAL = '<>';
    public const NOT_EQUAL_TO = '!=';
    public const NOT_IDENTICAL_TO = '!==';

    protected $operator;

    /**
     * Operator constructor.
     * @param string $operator
     */
    public function __construct($operator)
    {
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