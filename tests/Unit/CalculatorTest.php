<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Services\Calculator;
use App\Services\Operators\AddOperator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_calculator_calculates_with_given_operator(): void
    {
        $calculator = new Calculator(new AddOperator());
        $a = rand(0, 100);
        $b = rand(0, 100);

        $this->assertEquals($a + $b, $calculator->calculate($a, $b));
    }
}
