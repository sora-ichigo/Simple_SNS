<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user)
            ->get('/');
        $response->assertStatus(200);
    }
}
