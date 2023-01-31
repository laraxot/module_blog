<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Policies;

use Modules\Cms\Contracts\PanelContract;
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
=======
use Modules\Xot\Contracts\UserContract;
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
>>>>>>> 315e874 (up)
=======
use Modules\Cms\Models\Panels\Policies\XotBasePanelPolicy;
use Modules\Xot\Contracts\UserContract;
>>>>>>> c4fb14d (Lint)

<<<<<<< HEAD
class DocPanelPolicy extends XotBasePanelPolicy {
    public function rate(UserContract $user, PanelContract $panel): bool {
=======
/**
 * Class DocPanelPolicy.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> de5af69 (up)
=======
>>>>>>> 2ad6d2a (.)
class DocPanelPolicy extends XotBasePanelPolicy
{
    public function rate(UserContract $user, PanelContract $panel): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 71f0636 (up)
=======
class DocPanelPolicy extends XotBasePanelPolicy {
    public function rate(UserContract $user, PanelContract $panel): bool {
>>>>>>> e0d1f4b (Lint)
=======
>>>>>>> de5af69 (up)
=======
class DocPanelPolicy extends XotBasePanelPolicy {
    public function rate(UserContract $user, PanelContract $panel): bool {
>>>>>>> c24d571 (Lint)
=======
>>>>>>> 2ad6d2a (.)
        return true;
    }

    public function changePos(UserContract $user, PanelContract $panel): bool
    {
        return true;
    }
}
