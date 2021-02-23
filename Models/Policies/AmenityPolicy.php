<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class AmenityPolicy.
 */
class AmenityPolicy extends XotBasePolicy {
    public function indexEdit(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Policies;

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class AmenityPolicy.
 */
class AmenityPolicy extends XotBasePolicy {
    public function indexEdit(UserContract $user, ModelContract $post): bool {
        return true;
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
