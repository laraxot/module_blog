<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class FavoritePanelPolicy.
 */
class FavoritePanelPolicy extends XotBasePanelPolicy {
    public function noMoreFavorite(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
