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
use Modules\Xot\Contracts\UserContract as User;
=======
use Modules\Xot\Contracts\UserContract as User;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> 315e874 (up)
<<<<<<< HEAD
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract as User;
>>>>>>> c4fb14d (Lint)
=======
>>>>>>> 781794c (rebase)

/**
 * Class PostPanelPolicy.
 */
class PostPanelPolicy extends XotBasePanelPolicy {
    public function deleteNoPostId(User $user, PanelContract $panel): bool {
        return true;
    }

    public function clearDuplicates(User $user, PanelContract $panel): bool {
        return true;
    }
}
