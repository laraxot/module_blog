<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
//--- Services --
use Modules\Blog\Events\StoreProfileEvent;
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class ProfilePanel.
 */
class ProfilePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Profile';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    protected static array $search = [];

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @var array
     */
    public function with(): array {
        return [];
    }

    public function search(): array {
        return [];
    }

    /**
     * on select the option id.
     *
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->area_id;
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return $row->area_define_name;
    }

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                //'rules' => 'required',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'user.first_name',
                //'rules' => 'required',
                'comment' => null,
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'user.last_name',
                //'rules' => 'required',
                'comment' => null,
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'user.handle',
                //'rules' => 'required',
                'comment' => null,
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'PasswordWithConfirm',
                'name' => 'user.passwd',
                'rules' => 'required|confirmed',
                'comment' => null,
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'AddressGoogle',
                'name' => 'indirizzo',
                //'rules' => 'required',
                'comment' => null,
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'PivotFields', //-- da aggiornare
                'name' => 'privacies',
                'col_bs_size' => 12,
                'rules' => 'pivot_rules',
                'except' => ['index'],
            ],
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = [];

        return [];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request) {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(Request $request = null) {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request) {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(Request $request = null) {
        return [
            new \Modules\Blog\Models\Panels\Actions\PersonalInfoAction(),
            new \Modules\Blog\Models\Panels\Actions\UserSecurityAction(),
        ];
    }

    // avatar esiste solo in profile, non esiste l'avatar di un articolo

    /**
     * @param int $size
     *
     * @return string|null
     */
    public function avatar($size = 100) {
        $user = $this->row->user;

        if (! is_object($user) && is_object($this->row)) {
            if (isset($this->row->auth_user_id) && method_exists($this->row, 'user')) {
                $this->row->user()->create();
            }
            //dddx($this->row);
            return null;
        }

        $email = \md5(\mb_strtolower(\trim($user->email)));
        $default = \urlencode('https://tracker.moodle.org/secure/attachment/30912/f3.png');

        return "https://www.gravatar.com/avatar/$email?d=$default&s=$size";
    }

    public function storeCallback(array $params): object {
        extract($params);
        /*
        * metto apposto il titolo della pagina del profilo
        *
        **/
        if (! isset($row)) {
            dddx(['err' => 'row not defined']);

            return (object) [];
        }
        $user = $row->user;

        $post_data = [
            'title' => $row->user->handle,
            'guid' => Str::slug($row->user->handle),
            'auth_user_id' => $user->auth_user_id,
            'lang' => app()->getLocale(),
        ];

        if (is_object($row->post)) {
            $row->post->update($post_data);
        } else {
            $row->post()->create($post_data);
        }

        $res = event(new StoreProfileEvent($user));
        //$this->generateUUIDVerificationToken($user);
        \Auth::guard()->login($user, true);
        //$this->guard()->login($user); ???
        \Session::flash('swal', [
            'type' => 'success',
            'title' => trans('food::profile.store_success.title'),
            'text' => trans('food::profile.store_success.text'),
            'footer' => trans('food::profile.store_success.footer'),
        ]);
        //ddd($user);ddd($row);
        return $row;
    }

    /*
    public function destroyCallback(){
        $this->row->
    }
    */
}
