<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class ProfilePanelPolicy.
 */
class ProfilePanelPolicy extends XotBasePanelPolicy {
    /**
     * caso particalare.
     */
    public function index(?UserContract $user, PanelContract $panel): bool {
        return false;
    }

    public function create(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    /*
    public function edit(UserContract $user, PanelContract $panel): bool {

        return false;
    }
    */

    /**
     * caso particalare.
     */
    public function store(?UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function personalInfo(UserContract $user, PanelContract $panel): bool {
        return $panel->isRevisionBy($user);
    }

    public function userSecurity(UserContract $user, PanelContract $panel): bool {
        return $panel->isRevisionBy($user);
    }
}