<?php

namespace App\Policies;

use App\User;
use App\Task;

use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        return true;
    }

    // public function index()
    // {
    //     return true;
    // }

    public function destroy(User $user, Task $task)
    {
        return $user->id === $task->user_id;
    }
}
