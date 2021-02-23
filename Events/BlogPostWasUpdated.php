<<<<<<< HEAD
<?php

namespace Modules\Blog\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class BlogPostWasUpdated
 * @package Modules\Blog\Events
 */
class BlogPostWasUpdated {
    use SerializesModels;

    public function __construct() {
    }

    /**
     * @return array
     */
    public function broadcastOn() {
        return [];
    }
}
=======
<?php

namespace Modules\Blog\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class BlogPostWasUpdated
 * @package Modules\Blog\Events
 */
class BlogPostWasUpdated {
    use SerializesModels;

    public function __construct() {
    }

    /**
     * @return array
     */
    public function broadcastOn() {
        return [];
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
