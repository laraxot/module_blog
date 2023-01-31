<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;

<<<<<<< HEAD
class DeleteNoPostIdAction extends XotBasePanelAction {
=======
/**
 * Class DeleteNoPostIdAction.
 */
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
    public bool $onContainer = true;

    public string $icon = '<i class="fas fa-heart-broken"></i>';

    /**
     * @return mixed
     */
    public function handle()
    {
        $rows = Post::query()
            ->whereNull('post_id')->delete();

        return '<h3>+Fatto</h3>';
    }

    // end handle
}
