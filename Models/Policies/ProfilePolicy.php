<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;


use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class ProfilePolicy.
 */
class ProfilePolicy extends XotBasePolicy {
    /**
     * caso particalare.
     */
    public function index(?UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return false;
    }

    public function create(?UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }

    public function edit(UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return false;
    }

    /**
     * caso particalare.
     */
    public function store(?UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }

    public function personalInfo(UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }

    public function userSecurity(UserContract $user, \Illuminate\Database\Eloquent\Model $post): bool {
        return true;
    }
}
