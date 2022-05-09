<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class RatingPanelPolicy.
 */
class RatingPanelPolicy extends XotBasePanelPolicy {
    public function create(\Modules\Xot\Contracts\UserContract $user, \Modules\Xot\Contracts\PanelContract $panel): bool {
        return false;
    }
}
