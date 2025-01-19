<?php
declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class CalculatorTest extends TestCase
{
    public function test_the_calculator_is_rendered(): void
    {
        $response = $this->get(route('calculator'));

        $response->assertStatus(200);
        $response->assertSeeHtml(htmlentities('Mr & Mrs Smith Calculator'));
    }
}
