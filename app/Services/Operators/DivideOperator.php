<?php

declare(strict_types=1);

namespace App\Services\Operators;

use DivisionByZeroError;

class DivideOperator implements OperatorInterface
{
    public function execute(float $a, float $b): float
    {
        if ($b == 0) {
            throw new DivisionByZeroError('Division by 0 not possible');
        }

        return $a / $b;
    }
}
