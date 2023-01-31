<?php
<<<<<<< HEAD

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

=======
namespace Modules\Blog\Models\Panels\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\LU\Models\User as User;
use Modules\Blog\Models\Panels\Policies\CategorizablePanelPolicy as Post; 

>>>>>>> 8009709 (up)
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

class CategorizablePanelPolicy extends XotBasePanelPolicy {
}
