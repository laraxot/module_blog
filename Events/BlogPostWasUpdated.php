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
