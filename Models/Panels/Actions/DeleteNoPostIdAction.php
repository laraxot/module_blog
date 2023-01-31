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
=======
>>>>>>> 6c06ca4 (rebase)
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

=======
>>>>>>> 96ca200 (rebase)
=======
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;

>>>>>>> 522e2d3 (up)
/**
 * Class DeleteNoPostIdAction.
 */
class DeleteNoPostIdAction extends XotBasePanelAction {
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
