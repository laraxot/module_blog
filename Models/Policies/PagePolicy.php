<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;

/*
use App\Post;
use App\User;
*/
// use Modules\Food\Models\Post;

use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class PagePolicy.
 */
class PagePolicy extends XotBasePolicy {
    public function sendMsg(UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }
}
