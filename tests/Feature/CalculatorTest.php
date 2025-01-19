<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Enums\Operator;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CalculatorTest extends TestCase
{
    use WithFaker;

    public function test_the_calculator_is_rendered(): void
    {
        $response = $this->get(route('calculator'));

        $response->assertStatus(200);
        $response->assertSeeHtml(htmlentities('Mr & Mrs Smith Calculator'));
    }

    public function test_calculator_returns_correct_result(): void
    {
        $a = rand(-1000, 1000);
        $b = rand(-1000, 1000);
        $operator = $this->getRandomOperator();

        $response = $this->post(route('calculator.calculate', [
            'input_a' => $a,
            'input_b' => $b,
            'operator' => $operator
        ]));

        $expected = eval("return $a $operator $b;");
        $response->assertJson(['answer' => $expected]);
    }

    public function test_cannot_use_unaccepted_operators(): void
    {
        $response = $this->post(route('calculator.calculate', [
            'input_a' => rand(-1000, 1000),
            'input_b' => rand(-1000, 1000),
            'operator' => 'j'
        ]));

        $response->assertInvalid();
    }

    public function test_cannot_use_non_numeric_values(): void
    {
        $response = $this->post(route('calculator.calculate', [
            'input_a' => $this->faker()->word(),
            'input_b' => $this->faker()->word(),
            'operator' => $this->getRandomOperator()
        ]));

        $response->assertInvalid();
    }

    /**
     * Get a random operator value
     */
    private function getRandomOperator(): string
    {
        $operators = Operator::cases();
        return $operators[array_rand($operators)]->value;
    }
}
