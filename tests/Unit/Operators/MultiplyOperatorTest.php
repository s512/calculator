<?php

declare(strict_types=1);

namespace Tests\Unit\Operators;

use App\Services\Operators\MultiplyOperator;
use PHPUnit\Framework\TestCase;

class MultiplyOperatorTest extends TestCase
{
    public function test_numbers_can_added(): void
    {
        $operator = new MultiplyOperator();
        $a = rand(0, 100);
        $b = rand(0, 100);

        $this->assertEquals($a * $b, $operator->execute($a, $b));
    }
}
