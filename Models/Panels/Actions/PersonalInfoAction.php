<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

//-------- models -----------

//-------- services --------

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Session;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class PersonalInfoAction.
 */
class PersonalInfoAction extends XotBasePanelAction {
    public bool $onContainer = false; //onlyContainer

    public bool $onItem = true; //onlyContainer

    public string $icon = '<i class="far fa-file-excel fa-1x"></i>';

    public function handle(): Renderable {
        /*$view = 'pub_theme::profile.'.$this->getName();*/
        //dddx(get_defined_vars());

        /*return ThemeService::view($view)
            ->with('row', $this->row);*/
        if (null == $this->panel) {
            throw new Exception('this->panel is null');
        }

        return $this->panel->view();
    }

    public function postHandle(): Renderable {
        $data = request()->all();
        //dddx($data['handle']);
        /*
        \Validator::make($data, [
            //'name' => '',
            //'surname' => '',
            //'email' => 'required|email|unique:users',
            //'phone' => 'integer',
            //'bio' => 'max:200',
            ])->validate();
        */

        //dddx($data);
        $profile = $this->row;
        $profile->update($data);
        /*
        $profile->user->update();
        */
        $user_data = [
            'handle' => $data['handle'],
            'first_name' => $data['firstname'],
            'last_name' => $data['surname'],
        ];
        //$profile->user()->updateOrCreate($user_data);
        $profile->user()->update($user_data);

        $swal = [
            'icon' => 'success',
            'title' => 'Aggiornamento riuscito',
        ];
        Session::flash('swal', $swal);

        return $this->handle();
    }

    //end handle
}
