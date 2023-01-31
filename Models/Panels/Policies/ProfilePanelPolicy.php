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
