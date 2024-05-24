<?php

use App\Models\User;
use App\Models\Disease;
use App\Models\Treatment;
use App\Models\Event;

it('user can have many diseases', function () {
    $user = User::factory()->has(Disease::factory()->count(3))->create();

    expect($user->diseases()->count())->toBe(3);
});

it('disease can have many treatments', function () {
    $disease = Disease::factory()->has(Treatment::factory()->count(2))->create();

    expect($disease->treatments()->count())->toBe(2);
});

it('user can have many events', function () {
    $user = User::factory()->has(Event::factory()->count(4))->create();

    expect($user->events()->count())->toBe(4);
});
