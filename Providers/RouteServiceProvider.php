<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Blog\Providers;

//-------models-----------
//use Modules\Blog\Models\Post;

//--- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Class RouteServiceProvider.
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider {
    protected string $moduleNamespace = 'Modules\Blog\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    //public function bootCallback(){

    //}
}
=======
<?php

declare(strict_types=1);

namespace Modules\Blog\Providers;

//-------models-----------
//use Modules\Blog\Models\Post;

//--- bases ---
use Modules\Xot\Providers\XotBaseRouteServiceProvider;

/**
 * Class RouteServiceProvider.
 */
class RouteServiceProvider extends XotBaseRouteServiceProvider {
    protected string $moduleNamespace = 'Modules\Blog\Http\Controllers';

    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    //public function bootCallback(){

    //}
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
