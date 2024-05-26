<?php

use App\Models\User;
use App\Models\Event;

it('unauthenticated user cannot create an event', function () {
    $response = $this->post('/events');
    $response->assertStatus(302);
});

it('unauthenticated user cannot visit events page', function () {
    $response = $this->get('/events');
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

it('unauthenticated user cannot store an event', function () {
    // Prepare request data
    $eventData = [
        'name' => 'Sample Event',
        'location' => 'Hospital',
        'event_time' => '2024-06-01 11:46:00',
        'description' => 'This is a description of the sample event.',
    ];

    // Send a POST request to store the event
    $response = $this->post(route('events.store'), $eventData);

    // Assert that the event was not created in the database
    $this->assertDatabaseMissing('events', [
        'name' => 'Sample Event',
    ]);

    // Assert that the user is redirected to the login page
    $response->assertRedirect(route('login'));
});

it('authenticated user can view an event', function () {
    // Create a user
    $user = User::factory()->create();

    // Create an event
    $event = Event::factory()->create([
        'user_id' => $user->id,
    ]);

    // Authenticate the user
    $this->actingAs($user);

    // Send a GET request to view the event
    $response = $this->get(route('events.show', $event->id));

    // Assert that the event is visible
    $response->assertStatus(200);
    $response->assertViewIs('events.show');
    $response->assertSee($event->name);
});

it('authenticated user can edit an event', function () {
    // Create a user
    $user = User::factory()->create();

    // Create an event
    $event = Event::factory()->create([
        'user_id' => $user->id,
    ]);

    // Authenticate the user
    $this->actingAs($user);

    // Send a GET request to edit the event
    $response = $this->get(route('events.edit', $event->id));

    // Assert that the event edit form is accessible
    $response->assertStatus(200);
    $response->assertViewIs('events.edit');
    $response->assertSee($event->name);
});

it('authenticated user can delete an event', function () {
    // Create a user
    $user = User::factory()->create();

    // Create an event
    $event = Event::factory()->create([
        'user_id' => $user->id,
    ]);

    // Authenticate the user
    $this->actingAs($user);

    // Send a DELETE request to delete the event
    $response = $this->delete(route('events.destroy', $event->id));

    // Assert that the event was deleted from the database
    $this->assertDatabaseMissing('events', [
        'id' => $event->id,
    ]);

    // Assert redirection to the events index page
    $response->assertRedirect(route('events.index'));
});

it('displays validation errors when creating an event with invalid data', function () {
    // Create a user
    $user = User::factory()->create();

    // Authenticate the user
    $this->actingAs($user);

    // Prepare invalid request data (e.g., missing required fields)
    $invalidData = [];

    // Send a POST request to store the event
    $response = $this->post(route('events.store'), $invalidData);

    // Assert that validation errors are present
    $response->assertSessionHasErrors(['name', 'location', 'event_time']);
});

it('authenticated user cannot view another user\'s event', function () {
    // Create two users
    $user1 = User::factory()->create();
    $user2 = User::factory()->create();

    // Create an event for user1
    $event = Event::factory()->create([
        'user_id' => $user1->id,
        'name' => 'User1 Event',
        'location' => 'User1 Location',
        'event_time' => '2024-06-01 10:00:00',
        'description' => 'User1 description.',
    ]);

    // Authenticate user2
    $this->actingAs($user2);

    // Send a GET request to view the event
    $response = $this->get(route('events.show', $event->id));

    // Assert that user2 is forbidden from accessing the event
    $response->assertStatus(403);
});

it('authenticated user cannot edit another user\'s event', function () {
    // Create two users
    $user1 = User::factory()->create();
    $user2 = User::factory()->create();

    // Create an event for user1
    $event = Event::factory()->create([
        'user_id' => $user1->id,
    ]);

    // Authenticate user2
    $this->actingAs($user2);

    // Send a GET request to edit the event
    $response = $this->get(route('events.edit', $event->id));

    // Assert that user2 is forbidden from accessing the edit form
    $response->assertStatus(403);
});

it('authenticated user cannot delete another user\'s event', function () {
    // Create two users
    $user1 = User::factory()->create();
    $user2 = User::factory()->create();

    // Create an event for user1
    $event = Event::factory()->create([
        'user_id' => $user1->id,
    ]);

    // Authenticate user2
    $this->actingAs($user2);

    // Send a DELETE request to delete the event
    $response = $this->delete(route('events.destroy', $event->id));

    // Assert that user2 is forbidden from deleting the event
    $response->assertStatus(403);

    // Assert that the event still exists in the database
    $this->assertDatabaseHas('events', [
        'id' => $event->id,
    ]);
});
