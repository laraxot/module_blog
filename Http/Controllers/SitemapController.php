<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;

//---- services ---

/**
 * Class SitemapController
 * @package Modules\Blog\Http\Controllers
 */
class SitemapController extends Controller {
    /**
     *
     */
    private static ?SitemapController $instance = null;

    /**
     * @return SitemapController|null
     */
    public static function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return SitemapController|null
     */
    public function index() {
        return self::getInstance(); /// per il fluent, o chaining
    }

    /**
     * @return SitemapController|null
     */
    public function show() {
        return self::getInstance(); /// per il fluent, o chaining
    }

    /**
     * @return string
     */
    public function out() {
        return 'to-do';
    }
}
