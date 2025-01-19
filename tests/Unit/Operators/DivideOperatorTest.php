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
        $b = rand(0, 100);

        $this->assertEquals($a / $b, $operator->execute($a, $b));
    }
}
