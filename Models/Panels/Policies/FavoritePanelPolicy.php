<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 781794c (rebase)
=======
>>>>>>> 648f2e6 (rebase)
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> 315e874 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 648f2e6 (rebase)
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
>>>>>>> c4fb14d (Lint)
<<<<<<< HEAD
=======
>>>>>>> 781794c (rebase)
=======
>>>>>>> 648f2e6 (rebase)
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
>>>>>>> 6d76482 (up)

/**
 * Class FavoritePanelPolicy.
 */
class FavoritePanelPolicy extends XotBasePanelPolicy {
    public function noMoreFavorite(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
