<?php

namespace App\Policies\Status;

use App\Models\Timeline\Status;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}
