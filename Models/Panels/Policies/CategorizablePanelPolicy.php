<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 094f3bc (rebase)

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

=======
namespace Modules\Blog\Models\Panels\Policies;
<<<<<<< HEAD
=======
>>>>>>> da5725a (Lint)

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

>>>>>>> 4011d2d (up)
=======

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Blog\Models\Panels\Policies\CategorizablePanelPolicy as Post; 

>>>>>>> 8009709 (up)
>>>>>>> 094f3bc (rebase)
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

class CategorizablePanelPolicy extends XotBasePanelPolicy {
}
