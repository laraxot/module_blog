<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class MyRatingPolicy.
 */
class MyRatingPolicy extends XotBasePolicy {
    public function create(UserContract $user, ModelContract $post): bool {
        return false;
    }
}
