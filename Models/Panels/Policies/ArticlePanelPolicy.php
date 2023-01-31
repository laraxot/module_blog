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
 * Class ArticlePanelPolicy.
 */
class ArticlePanelPolicy extends XotBasePanelPolicy {
    public const UPDATE = 'update';
    public const DELETE = 'delete';
    public const APPROVE = 'approve';
    public const DISAPPROVE = 'disapprove';
    public const DECLINE = 'decline';
    public const PINNED = 'togglePinnedStatus';

    public function rate(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changePos(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function createArticle(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function update(UserContract $user, PanelContract $panel): bool {
        return $panel->isAuthoredBy($user) || $panel->isModeratedBy($user) || $panel->isAdminedBy($user);
    }

    public function delete(UserContract $user, PanelContract $panel): bool {
        return $panel->isAuthoredBy($user) || $panel->isModeratedBy($user) || $panel->isAdminedBy($user);
    }

    public function approve(UserContract $user, PanelContract $panel): bool {
        return $panel->isModeratedBy($user) || $panel->isAdminedBy($user);
    }

    public function disapprove(UserContract $user, PanelContract $panel): bool {
        return $panel->isModeratedBy($user) || $panel->isAdminedBy($user);
    }

    public function decline(UserContract $user, PanelContract $panel): bool {
        return $panel->isModeratedBy($user) || $panel->isAdminedBy($user);
    }

    public function togglePinnedStatus(UserContract $user, PanelContract $panel): bool {
        return $panel->isModeratedBy($user) || $panel->isAdminedBy($user);
    }
}
