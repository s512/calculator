<?php

declare(strict_types=1);

namespace Tests\Unit\Operators;

use App\Services\Operators\DivideOperator;
use PHPUnit\Framework\TestCase;

class DivideOperatorTest extends TestCase
{
    public function test_numbers_can_divided(): void
    {
        $operator = new DivideOperator();
        $a = rand(0, 100);
        $b = rand(1, 100);

        $this->assertEquals($a / $b, $operator->execute($a, $b));
    }

    public function test_cannot_divide_by_0(): void
    {
        $operator = new DivideOperator();
        $a = rand(0, 100);
        $b = 0;

        $this->expectException(\DivisionByZeroError::class);

        $operator->execute($a, $b);
    }
}
