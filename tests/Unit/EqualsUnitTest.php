<?php

namespace AaronAdrian\StringOperatorComparison\Tests\Unit;

use AaronAdrian\StringOperatorComparison\Operator;
use AaronAdrian\StringOperatorComparison\Tests\TestCase;

class EqualsUnitTest extends TestCase
{
    /**
     * @test
     */
    public function passes()
    {
        $operator = new Operator('=');
        $this->assertTrue($operator->compare(1, 1));
    }

    /**
     * @test
     */
    public function fails()
    {
        $operator = new Operator('=');
        $this->assertFalse($operator->compare(2, 1));
    }
}