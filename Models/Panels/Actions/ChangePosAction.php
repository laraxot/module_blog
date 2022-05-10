<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class ChangePosAction.
 */
class ChangePosAction extends XotBasePanelAction {
    // public bool $onContainer = false;

    public bool $onItem = true;
    // onlyContainer
    // mettere freccette su e giù

    public string $icon = '<i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i>';

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle() {
        // return '';
        dddx($this->row);
    }
}
