<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- models -----------
use Modules\Lang\Models\Post;
// -------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

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
