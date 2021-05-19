<?php

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class RatingPanelPolicy
 * @package Modules\Blog\Models\Panels\Policies
 */
class RatingPanelPolicy extends XotBasePanelPolicy {
    /**
     * @param \Modules\Xot\Contracts\UserContract $user
     * @param \Modules\Xot\Contracts\PanelContract $panel
     * @return bool
     */
    public function create(\Modules\Xot\Contracts\UserContract $user, \Modules\Xot\Contracts\PanelContract $panel):bool {
        return false;
    }
}
