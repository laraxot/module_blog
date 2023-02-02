<?php

declare(strict_types=1);

namespace Modules\Blog\Events;

use Illuminate\Queue\SerializesModels;
use Modules\LU\Models\User;

/**
 * Class StoreProfileEvent.
 */
class StoreProfileEvent
{
    use SerializesModels;

    public User $user;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
