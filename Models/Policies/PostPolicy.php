<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class PostPolicy.
 */
class PostPolicy extends XotBasePolicy {
    public function deleteNoPostId(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function clearDuplicates(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
