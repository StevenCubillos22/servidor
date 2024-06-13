<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_register()
    {
        $user = [
            'name' => 'Santiago',
            'email' => 'vigo@gmail.com',
            'password' => '2222',
        ];

        $response = $this->postJson('api/register', $user);
        $response->assertStatus(200)
        ->assertJsonStructure(['data' => ['name', 'email', 'created_at', 'updated_at']]);
    }

    public function test_login()
    {
        $user = User::create([
            'name' => 'michi',
            'email' => 'michigan@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $loginData = [
            'email' => $user->email,
            'password' => 'password', 
        ];

        $response = $this->postJson('api/login', $loginData);
        $response->assertStatus(200)
                ->assertJsonStructure(['message', 'access_token', 'token_type']);
    }

    public function test_logout()
    {
        $user = User::create([
            'name' => 'algo',
            'email' => 'algo@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        $this->actingAs($user)->assertAuthenticated();

        $response = $this->actingAs($user)->withToken($token)->getJson('api/logout');
        $response->assertStatus(200)
                ->assertJson(['message' => 'La sesión se ha cerrado correctamente']);
    }
}
