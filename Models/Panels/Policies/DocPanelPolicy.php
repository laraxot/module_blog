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
 * Class DocPanelPolicy.
 */
class DocPanelPolicy extends XotBasePanelPolicy {
    public function rate(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function changePos(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
