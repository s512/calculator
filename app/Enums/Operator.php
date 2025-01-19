<?php
declare(strict_types=1);

namespace App\Enums;

use App\Services\Operators\AddOperator;
use App\Services\Operators\DivideOperator;
use App\Services\Operators\MultiplyOperator;
use App\Services\Operators\OperatorInterface;
use App\Services\Operators\SubtractOperator;

enum Operator: string
{
    case ADD = '+';
    case MULTIPLY = '*';
    case SUBTRACT = '-';
    case DIVIDE = '/';

    public function operatorInstance(): OperatorInterface
    {
        return match($this) {
            self::ADD => new AddOperator(),
            self::MULTIPLY => new MultiplyOperator(),
            self::SUBTRACT => new SubtractOperator(),
            self::DIVIDE => new DivideOperator()
        };
    }
}