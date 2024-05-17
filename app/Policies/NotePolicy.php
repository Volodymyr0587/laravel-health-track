<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NotePolicy
{
    /**
     * Determine whether the user can view, edit note models.
     */
    public function editNote(User $user, Note $note)
    {
        return $note->user->is($user);
    }
}
