<?php

namespace DoYouEvenTdd\PhpUnitSkeleton;

use PHPUnit\Framework\TestCase;

/**
 * Class CalculatorTest
 * @package DoYouEvenTdd\PhpUnitSkeleton
 */
class CalculatorTest extends TestCase
{

    /**
     * @test ::add
     */
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(1, 2);
        $this->assertEquals($result, 3);
    }
}