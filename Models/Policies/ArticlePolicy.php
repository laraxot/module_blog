<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;


use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class ArticlePolicy.
 */
class ArticlePolicy extends XotBasePolicy {
    public function rate(UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }

    public function changePos(UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }
}
