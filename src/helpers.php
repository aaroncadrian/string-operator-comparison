<?php

if(!function_exists('compare'))
{
    function compare($first, $operator, $second)
    {
        return \AaronAdrian\StringOperatorComparison\Comparison::make($first, $operator, $second);
    }
}