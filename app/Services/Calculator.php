<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Operators\OperatorInterface;

class Calculator
{
    private OperatorInterface $operator;

    public function __construct(OperatorInterface $operator)
    {
        $this->operator = $operator;
    }

    public function calculate(float $a, float $b): float
    {
        return $this->operator->execute($a, $b);
    }
}
