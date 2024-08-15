<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Annonce;

class AnnoncePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Annonce $annonce)
    {
        // Check if the user is the owner of the annonce
        return $user->id === $annonce->user_id;
    }
}
