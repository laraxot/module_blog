<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

/*
use App\Post;
use App\User;
*/
//use Modules\Food\Models\Post;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class PagePanelPolicy.
 */
class PagePanelPolicy extends XotBasePanelPolicy {
    public function sendMsg(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

/*
use App\Post;
use App\User;
*/
//use Modules\Food\Models\Post;

use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class PagePanelPolicy.
 */
class PagePanelPolicy extends XotBasePanelPolicy {
    public function sendMsg(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
