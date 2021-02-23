<<<<<<< HEAD
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
=======
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
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
