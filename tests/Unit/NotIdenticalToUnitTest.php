<?php

namespace AaronAdrian\StringOperatorComparison\Tests\Unit;

use AaronAdrian\StringOperatorComparison\Operator;
use AaronAdrian\StringOperatorComparison\Tests\TestCase;

class NotIdenticalToUnitTest extends TestCase
{
    /**
     * @test
     */
    public function passes_integer_string()
    {
        $operator = new Operator('!==');
        $this->assertTrue($operator->compare(1, '1'));
    }

    /**
     * @test
     */
    public function passes_different_integers()
    {
        $operator = new Operator('!==');
        $this->assertTrue($operator->compare(1, 2));
    }

    /**
     * @test
     */
    public function fails_both_integer()
    {
        $operator = new Operator('!==');
        $this->assertFalse($operator->compare(2, 2));
    }
}