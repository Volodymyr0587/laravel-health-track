<?php

namespace App\Policies;

use App\Models\HealthProfile;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class HealthProfilePolicy
{
    /**
     * Determine whether the user can view, edit event models.
     */
    public function edit(User $user, HealthProfile $healthProfile)
    {
        return $healthProfile->user->is($user);
    }
}
