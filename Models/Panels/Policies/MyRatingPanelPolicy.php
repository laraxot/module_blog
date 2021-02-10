<?php

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class MyRatingPanelPolicy
 * @package Modules\Blog\Models\Panels\Policies
 */
class MyRatingPanelPolicy extends XotBasePanelPolicy {
    /**
     * @param \Modules\Xot\Contracts\UserContract $user
     * @param \Modules\Xot\Contracts\PanelContract $panel
     * @return false
     */
    public function create(\Modules\Xot\Contracts\UserContract $user, \Modules\Xot\Contracts\PanelContract $panel):bool {
        return false;
    }
}
