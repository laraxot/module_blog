<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class RatingPanelPolicy.
 */
class RatingPanelPolicy extends XotBasePanelPolicy
{
    public function create(\Modules\Xot\Contracts\UserContract $user, \Modules\Cms\Contracts\PanelContract $panel): bool
    {
        return false;
    }
}
