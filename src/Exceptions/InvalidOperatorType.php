<?php

namespace AaronAdrian\StringOperatorComparison\Exceptions;

use Throwable;

class InvalidOperatorType extends StringOperatorComparisonException
{
    public function __construct(string $operator = "", Throwable $previous = null, int $code = 0)
    {
        $message = "{$operator} is not a valid operator.";
        parent::__construct($message, $code, $previous);
    }
}