<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;


use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class PhotoPolicy.
 */
class PhotoPolicy extends XotBasePolicy {
    public function rate(UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }
}
