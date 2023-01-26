<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

/*
use App\Post;
use App\User;
*/
// use Modules\Food\Models\Post;

use Modules\Cms\Contracts\PanelContract;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> 315e874 (up)
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
>>>>>>> c4fb14d (Lint)

/**
 * Class PagePanelPolicy.
 */
class PagePanelPolicy extends XotBasePanelPolicy
{
    public function sendMsg(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

    public function articleCreate(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

    public function threadCreate(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

    public function articleModerate(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }
}
