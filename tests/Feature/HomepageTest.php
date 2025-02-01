<?php

declare(strict_types=1);

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomepageTest extends TestCase
{
    use WithFaker;

    public function test_homepage_redirects_to_calculator(): void
    {
        $response = $this->get('/');

        $response->assertRedirect(route('calculator'));
    }

}
