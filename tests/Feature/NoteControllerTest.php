<?php

use App\Models\User;

it('authenticated user can store a note', function () {
    // Create a user
    $user = User::factory()->create();

    // Authenticate the user
    $this->actingAs($user);

    // Prepare request data
    $noteData = [
        'name' => 'Sample Note',
        'body' => 'Hospital',
    ];

    // Send a POST request to store the event
    $response = $this->post(route('notes.store'), $noteData);

    // Assert that the event was created
    $this->assertDatabaseHas('notes', [
        'user_id' => $user->id,
        'name' => 'Sample Note',
        'body' => 'Hospital',
    ]);

    // Assert redirection to the notes index page
    $response->assertRedirect(route('notes.index'));
});

it('note has a slug from note name', function () {
    // Create a user
    $user = User::factory()->create();

    // Authenticate the user
    $this->actingAs($user);

    // Prepare request data
    $noteData = [
        'name' => 'Sample Note',
        'body' => 'Hospital',
    ];

    // Send a POST request to store the event
    $this->post(route('notes.store'), $noteData);

    // Assert that the event was created
    $this->assertDatabaseHas('notes', [
        'slug' => 'sample-note'
    ]);
});
