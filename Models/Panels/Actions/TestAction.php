<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- models -----------

// -------- services --------
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class TestAction.
 */
class TestAction extends XotBasePanelAction
{
    public bool $onItem = true;

    public bool $onContainer = true;

    /**
     * @return mixed
     */
    public function handle()
    {
        return $this->panel->view();
    }
}
