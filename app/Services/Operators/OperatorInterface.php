<?php

declare(strict_types=1);

namespace App\Services\Operators;

interface OperatorInterface
{
    /**
     * Execute the sum using the numbers given
     */
    public function execute(float $a, float $b): float;
}
