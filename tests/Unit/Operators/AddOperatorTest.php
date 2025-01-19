<?php

declare(strict_types=1);

namespace Tests\Unit\Operators;

use App\Services\Operators\AddOperator;
use PHPUnit\Framework\TestCase;

class AddOperatorTest extends TestCase
{
    public function test_numbers_can_added(): void
    {
        $adder = new AddOperator();
        $a = rand(0, 100);
        $b = rand(0, 100);

        $this->assertEquals($a + $b, $adder->execute($a, $b));
    }
}
