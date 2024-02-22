<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UpdateProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function testUpdateProfile()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/mypage/profile', [
            'name' => 'New Name',
            'postcode' => '123-4567',
            'address' => 'New Address',
            'building' => 'New Building',
        ]);

        $response->assertRedirect();

        $this->assertDatabaseHas('users', [
            'id' => $user->id,
            'name' => 'New Name',
            'postcode' => '123-4567',
            'address' => 'New Address',
            'building' => 'New Building',
        ]);

        $this->artisan('migrate:refresh --seed');
    }
}
