<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract as User;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class PostPanelPolicy.
 */
class PostPanelPolicy extends XotBasePanelPolicy {
    public function deleteNoPostId(User $user, PanelContract $panel): bool {
        return true;
    }

    public function clearDuplicates(User $user, PanelContract $panel): bool {
        return true;
    }
}
