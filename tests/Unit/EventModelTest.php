<?php
use App\Models\Event;
use App\Models\User;

test('has a name, location and event_time attributes', function () {
    $event = new Event([
        'user_id' => User::factory(),
        'name' => 'Event name',
        'location' => 'Event location',
        'event_time' => '2009-11-02 13:24:00'
    ]);
    expect($event->name)->toBe('Event name');
    expect($event->location)->toBe('Event location');
    expect($event->event_time)->toBe('2009-11-02 13:24:00');
});
