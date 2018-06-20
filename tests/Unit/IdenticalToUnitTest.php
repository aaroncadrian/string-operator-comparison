<?php

namespace AaronAdrian\StringOperatorComparison\Tests\Unit;

use AaronAdrian\StringOperatorComparison\Operator;
use AaronAdrian\StringOperatorComparison\Tests\TestCase;

class IdenticalToUnitTest extends TestCase
{
    /**
     * @test
     */
    public function passes_both_integer()
    {
        $operator = new Operator('===');
        $this->assertTrue($operator->compare(1, 1));
    }

    /**
     * @test
     */
    public function fails_both_integer()
    {
        $operator = new Operator('===');
        $this->assertFalse($operator->compare(2, 1));
    }

    /**
     * @test
     */
    public function fails_integer_string()
    {
        $operator = new Operator('===');
        $this->assertFalse($operator->compare('2', 2));
    }
}