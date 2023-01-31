<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- models -----------

// -------- services --------

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Session;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8513cb9 (rebase)
=======
use Modules\Theme\Services\ThemeService;
>>>>>>> 5a5000f (up)
=======
>>>>>>> a91a603 (Lint)
<<<<<<< HEAD
=======
=======
use Modules\Theme\Services\ThemeService;
>>>>>>> 5a5000f (up)
>>>>>>> 658d838 (rebase)
=======
>>>>>>> 8513cb9 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 47d8285 (rebase)
=======
>>>>>>> 355a234 (rebase)
    public function handle(): Renderable {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 0088a11 (rebase)
=======
>>>>>>> aff4d2d (rebase)
    public function handle(): Renderable
    {
>>>>>>> 00a7996 (.)
=======
    public function handle(): Renderable
    {
=======
    public function handle(): Renderable {
>>>>>>> afa2edf (Lint)
>>>>>>> f0ffa9e (rebase)
=======
=======
=======
>>>>>>> 0088a11 (rebase)
    public function handle(): Renderable
    {
>>>>>>> 00a7996 (.)
>>>>>>> 47d8285 (rebase)
        if (null == $this->panel) {
=======
<<<<<<< HEAD
       
=======
>>>>>>> 056bec8 (Lint)
        if (null === $this->panel) {
>>>>>>> 883dd21 (up)
=======
        if (null == $this->panel) {
>>>>>>> ea58237 (up)
=======
    public function handle(): Renderable {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (null === $this->panel) {
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
=======
=======
=======
    public function handle(): Renderable
    {
>>>>>>> 42ca46e (up)
        if (null == $this->panel) {
>>>>>>> 1172c16 (up)
>>>>>>> 37f274f (rebase)
=======
=======
>>>>>>> d0b387a (rebase)
=======
>>>>>>> 1fdd40b (rebase)
        if (null == $this->panel) {
=======
       
=======
>>>>>>> 056bec8 (Lint)
        if (null === $this->panel) {
>>>>>>> 883dd21 (up)
<<<<<<< HEAD
>>>>>>> f031549 (rebase)
=======
=======
        if (null == $this->panel) {
>>>>>>> ea58237 (up)
>>>>>>> 1fdd40b (rebase)
=======
       
=======
>>>>>>> 648e6d8 (rebase)
=======
>>>>>>> d2bbae9 (rebase)
        if (null === $this->panel) {
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
<<<<<<< HEAD
>>>>>>> 355a234 (rebase)
=======
=======
=======
        if (null == $this->panel) {
>>>>>>> 1172c16 (up)
>>>>>>> 37f274f (rebase)
>>>>>>> d2bbae9 (rebase)
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
