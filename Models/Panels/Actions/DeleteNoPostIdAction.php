<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> c744a19 (up)
// -------- models -----------
>>>>>>> a91a603 (Lint)
=======
// -------- models -----------
>>>>>>> 6b1fa56 (.)
=======
>>>>>>> 8513cb9 (rebase)
=======
>>>>>>> baed241 (rebase)
=======
>>>>>>> 96ca200 (rebase)
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;
<<<<<<< HEAD
=======
=======
=======
>>>>>>> c744a19 (up)
// -------- models -----------
>>>>>>> a91a603 (Lint)
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;

// -------- services --------
// use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------
<<<<<<< HEAD
>>>>>>> 5a5000f (up)
=======
=======
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;
>>>>>>> 9972855 (up)
>>>>>>> c744a19 (up)

<<<<<<< HEAD
// -------- services --------
// use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------
<<<<<<< HEAD
>>>>>>> 5a5000f (up)
=======
=======
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;
>>>>>>> 9972855 (up)
>>>>>>> c744a19 (up)

<<<<<<< HEAD
<<<<<<< HEAD
class DeleteNoPostIdAction extends XotBasePanelAction {
=======
=======
=======
>>>>>>> 96ca200 (rebase)
=======
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;

>>>>>>> 522e2d3 (up)
>>>>>>> aef2fc3 (rebase)
/**
 * Class DeleteNoPostIdAction.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class DeleteNoPostIdAction extends XotBasePanelAction
{
>>>>>>> 71f0636 (up)
=======
class DeleteNoPostIdAction extends XotBasePanelAction {
>>>>>>> e0d1f4b (Lint)
=======
class DeleteNoPostIdAction extends XotBasePanelAction
{
>>>>>>> de5af69 (up)
=======
class DeleteNoPostIdAction extends XotBasePanelAction {
>>>>>>> c24d571 (Lint)
=======
class DeleteNoPostIdAction extends XotBasePanelAction
{
>>>>>>> 5c40ed9 (rebase)
=======
class DeleteNoPostIdAction extends XotBasePanelAction {
>>>>>>> aef633b (rebase)
    public bool $onContainer = true;

    public string $icon = '<i class="fas fa-heart-broken"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        $rows = Post::query()
            ->whereNull('post_id')->delete();

        return '<h3>+Fatto</h3>';
    }

    // end handle
}
