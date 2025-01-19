<?php

declare(strict_types=1);

namespace App\Services\Operators;

class DivideOperator implements OperatorInterface
{
    public function execute(float $a, float $b): float
    {
        return $a / $b;
    }
}
