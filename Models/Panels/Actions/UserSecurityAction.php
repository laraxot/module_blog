<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- models -----------

// -------- services --------
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class UserSecurityAction.
 */
class UserSecurityAction extends XotBasePanelAction
{
    public bool $onContainer = false; // onlyContainer

    public bool $onItem = true; // onlyContainer

    public string $icon = '<i class="far fa-file-excel fa-1x"></i>';

    public function handle(): View
    {
        if (null == $this->panel) {
            throw new \Exception('panel is null');
        }

        return $this->panel->view();
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postHandle(): View
    {
        $data = request()->all();

        Validator::make($data, [
            'passwd' => 'required|confirmed|min:6',
        ])->validate();

        // dddx($data['passwd']);
        $profile = $this->row;

        $user = $profile->user;
        $user->update(['passwd' => $data['passwd']]);

        $swal = [
            'icon' => 'success',
            'title' => 'Aggiornamento riuscito',
        ];
        Session::flash('swal', $swal);

        return $this->handle();
    }

    // end handle
}
