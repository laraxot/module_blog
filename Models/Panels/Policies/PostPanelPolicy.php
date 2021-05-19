<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract as User;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

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
