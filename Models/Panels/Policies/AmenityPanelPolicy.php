<?php

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class AmenityPanelPolicy
 * @package Modules\Blog\Models\Panels\Policies
 */
class AmenityPanelPolicy extends XotBasePanelPolicy {
    /**
     * @param \Modules\Xot\Contracts\UserContract $user
     * @param \Modules\Xot\Contracts\PanelContract $panel
     * @return bool
     */
    public function indexEdit(\Modules\Xot\Contracts\UserContract $user, \Modules\Xot\Contracts\PanelContract $panel):bool {
        return true;
    }
}
