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

    /**
     * Perform the calculation using the numbers given and the operator already set
     */
    public function calculate(float $a, float $b): float
    {
        return $this->operator->execute($a, $b);
    }
}
