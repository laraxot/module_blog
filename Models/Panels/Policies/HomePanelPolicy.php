<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> 315e874 (up)
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
>>>>>>> c4fb14d (Lint)

/**
 * Class HomePanelPolicy.
 */
class HomePanelPolicy extends XotBasePanelPolicy {
    public function artisan(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function test(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function home(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function dashboard(?UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
