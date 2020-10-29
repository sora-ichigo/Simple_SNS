<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->actingAs(User::Create(['name'=>'aaa','email'=>'aaa@aa.com','email_verified_at','password'=>'aaa']))->get('/');
        $response->assertStatus(200);
    }
}
