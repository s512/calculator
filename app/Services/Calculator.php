<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Operators\OperatorInterface;

class Calculator
{
    private OperatorInterface $operator;

    public function setOperator(OperatorInterface $operator): void
    {
        $this->operator = $operator;
    }

    /**
     * Perform the calculation using the numbers given and the operator already set
     */
    public function calculate(float $a, float $b): float
    {
        if (!isset($this->operator)) {
            throw new \Exception('An operator must be set first');
        }

        return $this->operator->execute($a, $b);
    }
}
