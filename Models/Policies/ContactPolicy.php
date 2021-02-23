<?php
namespace Modules\Blog\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Blog\Models\Contact as Post;

use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class ContactPolicy
 * @package Modules\Blog\Models\Policies
 */
class ContactPolicy extends XotBasePolicy {
}
