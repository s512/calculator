<?php

declare(strict_types=1);

namespace Tests\Unit\Operators;

use App\Services\Operators\SubtractOperator;
use PHPUnit\Framework\TestCase;

class SubtractOperatorTest extends TestCase
{
    public function test_numbers_can_subtracted(): void
    {
        $operator = new SubtractOperator();
        $a = rand(0, 100);
        $b = rand(0, 100);

        $this->assertEquals($a - $b, $operator->execute($a, $b));
    }
}
