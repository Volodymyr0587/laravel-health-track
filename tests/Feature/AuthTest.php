<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;

it('can register a new user', function () {
    $response = $this->post('/register', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertRedirect('/');
    $this->assertDatabaseHas('users', ['email' => 'john@example.com']);
});

it('can authenticate a user', function () {
    $user = User::factory()->create([
        'email' => 'john@example.com',
        'password' => Hash::make('password'),
    ]);

    $response = $this->post('/login', [
        'email' => 'john@example.com',
        'password' => 'password',
    ]);

    $response->assertRedirect('/');
    $this->assertAuthenticatedAs($user);
});

it('can logout a user', function () {
    $this->actingAs(User::factory()->create());

    $response = $this->post('/logout');

    $response->assertRedirect('/');
    $this->assertGuest();
});
