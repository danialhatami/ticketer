<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Passport\Passport;
use Tests\TestCase;

class TicketTest extends TestCase
{

    use WithFaker;

    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_ticket()
    {

        $user = User::factory()->create();
        Passport::actingAs($user);

        $response = $this->postJson('/api/ticket/',
            [
                'title' => $this->faker->title,
                'description' => $this->faker->sentence,
                'questioner_user_id' => $user->id,
            ]
        );

        $response->assertStatus(200);
    }
}
