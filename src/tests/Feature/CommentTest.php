<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Models\Item;
use App\Models\Comment;

class CommentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function testIndex()
    {
        $user = User::factory()->create();
        $item = Item::factory()->create();
        Comment::factory()->create(['item_id' => $item->id]);

        $response = $this->actingAs($user)->get("/comment/$item->id");

        $response->assertStatus(200)
            ->assertViewIs('comment')
            ->assertViewHas('item', $item)
            ->assertViewHas('user', $user);

        $this->artisan('migrate:refresh --seed');
    }

    public function testCreate()
    {
        $user = User::factory()->create();
        $item = Item::factory()->create();
        $commentData = ['comment' => 'Test Comment'];

        $response = $this->actingAs($user)->post('/comment', array_merge(['id' => $item->id], $commentData));

        $this->assertDatabaseHas('comments', [
            'user_id' => $user->id,
            'item_id' => $item->id,
            'comment' => $commentData['comment'],
        ]);

        $response->assertRedirect();

        $this->artisan('migrate:refresh --seed');
    }

    public function testDelete()
    {
        $user = User::factory()->create();
        $comment = Comment::factory()->create(['user_id' => $user->id]);
        $otherComment = Comment::factory()->create();

        $response = $this->actingAs($user)->post('/comment/delete', ['id' => $comment->id]);

        $this->assertDatabaseMissing('comments', ['id' => $comment->id]);

        $this->assertDatabaseHas('comments', ['id' => $otherComment->id]);

        $response->assertRedirect();

        $this->artisan('migrate:refresh --seed');
    }
}
