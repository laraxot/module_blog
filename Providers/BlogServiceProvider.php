<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Blog\Providers;

//-------services --------
//-------models-----------
//use Modules\Blog\Models\PostRelated;
//use Modules\Xot\Models\ServiceProviderTrait;

use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class BlogServiceProvider.
 */
class BlogServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'blog';
}
=======
<?php

declare(strict_types=1);

namespace Modules\Blog\Providers;

//-------services --------
//-------models-----------
//use Modules\Blog\Models\PostRelated;
//use Modules\Xot\Models\ServiceProviderTrait;

use Modules\Xot\Providers\XotBaseServiceProvider;

/**
 * Class BlogServiceProvider.
 */
class BlogServiceProvider extends XotBaseServiceProvider {
    protected string $module_dir = __DIR__;

    protected string $module_ns = __NAMESPACE__;

    public string $module_name = 'blog';
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
