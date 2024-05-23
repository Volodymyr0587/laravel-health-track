<?php

namespace App\Policies;

use App\Models\Disease;
use App\Models\User;

class DiseasePolicy
{
   /**
     * Determine whether the user can view, edit disease models.
     */
    public function editDisease(User $user, Disease $disease)
    {
        return $disease->user->is($user);
    }
}
