<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

<<<<<<< HEAD
// -------- models -----------
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;

// -------- services --------
// use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------
=======
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;
>>>>>>> 9972855 (up)

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
