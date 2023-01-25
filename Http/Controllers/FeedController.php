<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;

// ---- services ---

/**
 * Class FeedController.
 */
class FeedController extends Controller {
    private static ?FeedController $instance = null;

    /**
     * @return FeedController|null
     */
    public static function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return FeedController|null
     */
    public function index() {
        return self::getInstance(); // / per il fluent, o chaining
    }

    /**
     * @return FeedController|null
     */
    public function show() {
        return self::getInstance(); // / per il fluent, o chaining
    }

    /**
     * @return string
     */
    public function out() {
        return 'to-do';
    }
}
