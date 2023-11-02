<?php

namespace LaravelEnso\Calendar\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use LaravelEnso\Calendar\Models\Event;

class EventPolicy
{
    use HandlesAuthorization;

    public function before($user)
    {
        return $user->isSuperior();
    }

    public function handle($user, Event $event)
    {
        return $user->id === $event->created_by;
    }
}
