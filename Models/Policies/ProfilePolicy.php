<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class ProfilePolicy.
 */
class ProfilePolicy extends XotBasePolicy {
    /**
     * caso particalare.
     */
    public function index(?UserContract $user, ModelContract $post): bool {
        return false;
    }

    public function create(?UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function edit(UserContract $user, ModelContract $post): bool {
        return false;
    }

    /**
     * caso particalare.
     */
    public function store(?UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function personalInfo(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function userSecurity(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
