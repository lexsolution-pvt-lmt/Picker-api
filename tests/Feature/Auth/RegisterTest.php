<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/api/register', [
            'name' => 'Ravindu',
            'email' => 'ravindu1235@test.com',
            'password' => 'Ravindu123',
            'password_confirmation' => 'Ravindu123'
        ]);

        $response->assertStatus(200);

    }
}
