<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Enums\Operator;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    public function test_the_calculator_is_rendered(): void
    {
        $response = $this->get(route('calculator'));

        $response->assertStatus(200);
        $response->assertSeeHtml(htmlentities('Mr & Mrs Smith Calculator'));
    }

    public function test_calculator_returns_correct_result(): void
    {
        $a = rand(-1000,1000);
        $b = rand(-1000,1000);
        $operators = Operator::cases();
        $operator = $operators[array_rand($operators)]->value;
        
        $response = $this->post(route('calculator.calculate', [
            'a' => $a,
            'b' => $b,
            'operator' => $operator
        ]));

        $expected = eval("return $a $operator $b;");
        $response->assertJson(['answer' => $expected]);
    }
}
