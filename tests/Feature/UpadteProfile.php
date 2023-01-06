<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpadteProfile extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function update_profile()
    {
        $this->withoutExceptionHandling();

        $response = $this->getJson('put/profile');

        $response->assertStatus(200);
    }
}
