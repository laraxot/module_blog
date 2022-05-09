<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Class CanReadPostsMiddleware.
 */
class CanReadPostsMiddleware {
    /**
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        return $next($request);
    }
}
