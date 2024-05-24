<?php

use App\Models\User;
use App\Models\Event;

// it('can create an event', function () {
//     $user = User::factory()->create();
//     $this->actingAs($user);

//     $response = $this->post('/events', [
//         'user_id' => $user->id,
//         'name' => 'Doctor Visit',
//         'event_time' => now()->toDateTimeString(),
//         'description' => 'Check-up',
//         'price' => '100.00',
//     ]);

//     $response->assertRedirect('/');
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
