<?php

namespace App\Policies;

use App\Models\Treatment;
use App\Models\User;

class TreatmentPolicy
{
    public function editTreatment(User $user, Treatment $treatment)
    {
        return $treatment->disease->user()->is($user);
    }
}
