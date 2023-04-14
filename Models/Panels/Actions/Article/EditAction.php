<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions\Article;

// -------- services --------
use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class CreateArticleAction.
 */
class EditAction extends XotBasePanelAction
{
    public bool $onItem = true;

    public string $icon = '<i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i>';

    public string $tpl = 'v1';

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle()
    {
        /*
        $view=app(GetViewAction::class)->execute($this->tpl);
        $view_params=[];

        return view($view,$view_params);
        */
        return $this->panel->view();
    }
}
