<?php

namespace AaronAdrian\StringOperatorComparison\Tests\Unit;

use AaronAdrian\StringOperatorComparison\Operator;
use AaronAdrian\StringOperatorComparison\Tests\TestCase;

class LessThanOrEqualToUnitTest extends TestCase
{
    /**
     * @test
     */
    public function passes_less_than()
    {
        $operator = new Operator('<=');
        $this->assertTrue($operator->compare(1, 2));
    }

    /**
     * @test
     */
    public function passes_equal_to()
    {
        $operator = new Operator('<=');
        $this->assertTrue($operator->compare(2, 2));
    }

    /**
     * @test
     */
    public function fails()
    {
        $operator = new Operator('<=');
        $this->assertFalse($operator->compare(2, 1));
    }
}