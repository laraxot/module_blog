<?php

declare(strict_types=1);

namespace Modules\Blog\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class BlogPostWasUpdated.
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
