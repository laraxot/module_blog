<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Blog\Events;

use Illuminate\Queue\SerializesModels;
use Modules\LU\Models\User;

/**
 * Class StoreProfileEvent.
 */
class StoreProfileEvent {
    use SerializesModels;

    public User $user;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user) {
        $this->user = $user;
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Blog\Events;

use Illuminate\Queue\SerializesModels;
use Modules\LU\Models\User;

/**
 * Class StoreProfileEvent.
 */
class StoreProfileEvent {
    use SerializesModels;

    public User $user;

    /**
     * Create a new event instance.
     */
    public function __construct(User $user) {
        $this->user = $user;
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
