<?php

declare(strict_types=1);

namespace App\Services\Operators;

interface OperatorInterface
{
    public function execute(float $a, float $b): float;
}
