<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- services --------
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class CreateArticleAction.
 */
class CreateArticleAction extends XotBasePanelAction
{
    public bool $onContainer = true;

    public string $icon = '<i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i>';

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle()
    {
        return $this->panel->view();
    }
}
