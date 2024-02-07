<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testLogin(): void
    {
        $response = $this->get('/login');
        $response->assertStatus(200);

        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/login');
        $response->assertStatus(302);
    }
}
