<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions\Article;

// -------- services --------
use Illuminate\Contracts\Support\Renderable;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class CreateArticleAction.
 */
class CreateAction extends XotBasePanelAction
{
    public bool $onContainer = true;

    public string $icon = '<i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i>';

    /**
     * Perform the action.
     */
    public function handle(): Renderable
    {
        return $this->panel->view();
    }
}
