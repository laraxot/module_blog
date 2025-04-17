<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- services --------
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// use Modules\UI\Services\ThemeService;

// -------- bases -----------

/**
 * Class SendMsgAction.
 */
class SendMsgAction extends XotBasePanelAction
{
    // public bool $onContainer = false;

    public bool $onItem = true; // onlyContainer
    // mettere freccette su e giù

    public string $icon = '<i class="far fa-paper-plane"></i>';

    /**
     * Perform the action.
     */
    public function handle()
    {
        return 'invio messaggio';
        // dddx($this->row);
    }
}
