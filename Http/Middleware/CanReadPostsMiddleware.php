<?php

namespace Modules\Blog\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Class CanReadPostsMiddleware
 * @package Modules\Blog\Http\Middleware
 */
class CanReadPostsMiddleware {
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        return $next($request);
    }
}
