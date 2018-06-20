<?php

namespace AaronAdrian\StringOperatorComparison;

use MyCLabs\Enum\Enum;

class OperatorType extends Enum
{
    const LESS_THAN = '<';
    const LESS_THAN_OR_EQUAL_TO = '<=';
    const GREATER_THAN = '>';
    const GREATER_THAN_OR_EQUAL_TO = '>=';
    const EQUALS = '=';
    const EQUAL_TO = '==';
    const IDENTICAL_TO = '===';
    const DOES_NOT_EQUAL = '<>';
    const NOT_EQUAL_TO = '!=';
    const NOT_IDENTICAL_TO = '!==';
}