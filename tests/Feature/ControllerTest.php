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

// it('authenticated user can store an event', function () {
//     $user = User::factory()->create();
//     $response = $this->actingAs($user)
//         ->post(route('events.store'), [
//             'name' => 'Doctor Visit',
//             'event_time' => now()->toDateTimeString(),
//             'description' => 'Check-up',
//             'price' => '100.00',
//         ]);

//     // Debugging output
//     if ($response->status() != 302) {
//         dd($response->content());
//     }

//     // Verify the response redirects to the events index
//     $response->assertRedirect('/events');

//     // Verify the event was created in the database
//     $this->assertDatabaseHas('events', [
//         'name' => 'Doctor Visit',
//         'user_id' => $user->id,
//     ]);
// });


// it('can update an event', function () {
//     $user = User::factory()->create();
//     $event = Event::factory()->for($user)->create([
//         'name' => 'Doctor Visit',
//     ]);

//     $this->actingAs($user);

//     $response = $this->put("/events/{$event->id}", [
//         'name' => 'Updated Visit',
//         'event_time' => now(),
//         'description' => 'Follow-up',
//         'price' => '150.00',
//     ]);

//     $response->assertRedirect('/events');
//     $this->assertDatabaseHas('events', [
//         'id' => $event->id,
//         'name' => 'Updated Visit',
//     ]);
// });

it('can delete an event', function () {
    $user = User::factory()->create();
    $event = Event::factory()->for($user)->create();

    $this->actingAs($user);

    $response = $this->delete("/events/{$event->id}");

    $response->assertRedirect('/events');
    $this->assertDatabaseMissing('events', ['id' => $event->id]);
});
