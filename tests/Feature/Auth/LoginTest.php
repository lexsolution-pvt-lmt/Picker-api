<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/api/login', [
            'email' => 'ravindu12345@test.com',
            'password' => 'Ravindu123'
        ]);

        $response->assertStatus(200);
    }
}
