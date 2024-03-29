<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;

class DocPanelPolicy extends XotBasePanelPolicy
{
    public function rate(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }

    public function changePos(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }
}
