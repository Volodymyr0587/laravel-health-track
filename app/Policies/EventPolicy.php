<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EventPolicy
{
    /**
     * Determine whether the user can view, edit event models.
     */
    public function edit(User $user, Event $event)
    {
        return $event->user->is($user);
    }

}
