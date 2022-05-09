<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;


use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class FavoritePolicy.
 */
class FavoritePolicy extends XotBasePolicy {
    public function noMoreFavorite(UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }
}
