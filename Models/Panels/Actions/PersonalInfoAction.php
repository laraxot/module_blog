<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- models -----------

// -------- services --------

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Theme\Services\ThemeService;
>>>>>>> 5a5000f (up)
=======
>>>>>>> a91a603 (Lint)
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class PersonalInfoAction.
 */
class PersonalInfoAction extends XotBasePanelAction
{
    public bool $onContainer = false; // onlyContainer

    public bool $onItem = true; // onlyContainer

    public string $icon = '<i class="far fa-file-excel fa-1x"></i>';

<<<<<<< HEAD
    public function handle(): Renderable {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function handle(): Renderable
    {
>>>>>>> 00a7996 (.)
        if (null == $this->panel) {
=======
       
=======
>>>>>>> 056bec8 (Lint)
        if (null === $this->panel) {
>>>>>>> 883dd21 (up)
=======
        if (null == $this->panel) {
>>>>>>> ea58237 (up)
            throw new \Exception('this->panel is null');
        }

        return $this->panel->view();
    }

    public function postHandle(): Renderable
    {
        $data = request()->all();
        // dddx($data['handle']);
        /*
        \Validator::make($data, [
            //'name' => '',
            //'last_name' => '',
            //'email' => 'required|email|unique:users',
            //'phone' => 'integer',
            //'bio' => 'max:200',
            ])->validate();
        */

        // dddx($data);
        $profile = $this->row;
        $profile->update($data);
        /*
        $profile->user->update();
        */
        $user_data = [
            'handle' => $data['handle'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
        ];
        // $profile->user()->updateOrCreate($user_data);
        if (! method_exists($profile, 'user')) {
            abort(500);
        }

        $profile->user()->update($user_data);

        $swal = [
            'icon' => 'success',
            'title' => 'Aggiornamento riuscito',
        ];
        Session::flash('swal', $swal);

        return $this->handle();
    }

    // end handle
}
