<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 781794c (rebase)
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> 315e874 (up)
<<<<<<< HEAD
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
>>>>>>> c4fb14d (Lint)
=======
>>>>>>> 781794c (rebase)

/**
 * Class PagePanelPolicy.
 */
class PagePanelPolicy extends XotBasePanelPolicy {
    public function sendMsg(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function articleCreate(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function threadCreate(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function articleModerate(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
