<?php

use App\Models\User;
use App\Models\Event;

it('unauthenticated user cannot create an event', function () {
    $response = $this->post('/events');
    $response->assertStatus(302);
});

it('authenticated user can visit create event page', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    // Attempt to visit the create event page
    $response = $this->get('/events/create');

    // Check if the page loads successfully
    $response->assertStatus(200);
});


it('authenticated user can store an event', function () {
    // Create a user
    $user = User::factory()->create();

    // Authenticate the user
    $this->actingAs($user);

    // Prepare request data
    $eventData = [
        'name' => 'Sample Event',
        'location' => 'Hospital',
        'event_time' => '2006-04-16 11:46:00',
        'description' => 'This is a description of the sample event.',
        // Add other necessary fields here
    ];

    // Send a POST request to store the event
    $response = $this->post(route('events.store'), $eventData);

    // Assert that the event was created
    $this->assertDatabaseHas('events', [
        'user_id' => $user->id,
        'name' => 'Sample Event',
        'location' => 'Hospital',
        'event_time' => '2006-04-16 11:46:00',
        'description' => 'This is a description of the sample event.',
    ]);

    // Assert redirection to the events index page
    $response->assertRedirect(route('events.index'));
});


it('authenticated user can update an event', function () {
    // Create a user
    $user = User::factory()->create();

    // Create an event
    $event = Event::factory()->create([
        'user_id' => $user->id,
        'name' => 'Original Event',
        'location' => 'Original Location',
        'event_time' => '2024-06-01 10:00:00',
        'description' => 'Original description.',
    ]);

    // Authenticate the user
    $this->actingAs($user);

    // Prepare request data for updating the event
    $updateData = [
        'name' => 'Updated Event',
        'location' => 'Updated Location',
        'event_time' => '2024-06-01 12:00:00',
        'description' => 'Updated description.',
        // Add other necessary fields here
    ];

    // Send a PATCH request to update the event
    $response = $this->patch(route('events.update', $event->id), $updateData);

    // Assert that the event was updated in the database
    $this->assertDatabaseHas('events', [
        'id' => $event->id,
        'user_id' => $user->id,
        'name' => 'Updated Event',
        'location' => 'Updated Location',
        'event_time' => '2024-06-01 12:00:00',
        'description' => 'Updated description.',
    ]);

    // Assert redirection to the event's show page
    $response->assertRedirect(route('events.show', $event->id));
});

it('can delete an event', function () {
    $user = User::factory()->create();
    $event = Event::factory()->for($user)->create();

    $this->actingAs($user);

    $response = $this->delete("/events/{$event->id}");

    $response->assertRedirect('/events');
    $this->assertDatabaseMissing('events', ['id' => $event->id]);
});
