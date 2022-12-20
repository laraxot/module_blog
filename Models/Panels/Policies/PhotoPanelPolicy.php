<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class PhotoPanelPolicy.
 */
class PhotoPanelPolicy extends XotBasePanelPolicy {
    public function rate(UserContract $user, PanelContract $panel): bool {
        return true;
    }

    public function uploadimagetest(UserContract $user, PanelContract $panel): bool {
        return true;
    }
}
