<?php

namespace Tests\Feature\Post;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_success_creation(): void
    {
        $user = User::first();

        $this->actingAs($user);

        $data = [
            'title' => fake()->sentence(),
            'body' => fake()->paragraph()
        ];

        $response = $this->post(route('posts.store'), $data);

        $response->assertStatus(301);
    }
}
