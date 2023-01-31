<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
<<<<<<< HEAD
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> 315e874 (up)

/**
 * Class FavoritePanelPolicy.
 */
class FavoritePanelPolicy extends XotBasePanelPolicy {
    public function noMoreFavorite(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
