<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
// --- Services --
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Modules\Blog\Events\StoreProfileEvent;
use Modules\Blog\Models\Profile;
use Modules\Cms\Models\Panels\XotBasePanel;

/**
 * Class ProfilePanel.
 */
class ProfilePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Profile';

    public Profile $row;

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                // 'rules' => 'required',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'user.first_name',
                // 'rules' => 'required',
                'comment' => null,
                'col_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'user.last_name',
                // 'rules' => 'required',
                'comment' => null,
                'col_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'user.handle',
                // 'rules' => 'required',
                'comment' => null,
                'col_size' => 6,
            ],
            (object) [
                'type' => 'PasswordWithConfirm',
                'name' => 'user.passwd',
                'rules' => 'required|confirmed',
                'comment' => null,
                'col_size' => 12,
            ],
            (object) [
                'type' => 'AddressGoogle',
                'name' => 'indirizzo',
                // 'rules' => 'required',
                'comment' => null,
                'col_size' => 12,
            ],
            (object) [
                'type' => 'PivotFields', // -- da aggiornare
                'name' => 'privacies',
                'col_size' => 12,
                'rules' => 'pivot_rules',
                'except' => ['index'],
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(Request $request = null): array {
        return [
            new \Modules\Blog\Models\Panels\Actions\PersonalInfoAction(),
            new \Modules\Blog\Models\Panels\Actions\UserSecurityAction(),
        ];
    }

    // avatar esiste solo in profile, non esiste l'avatar di un articolo

    /**
     * @param int $size
     */
    public function avatar($size = 100): ?string {
        // if (null === $this->row) {
        //    throw new \Exception('row is null');
        // }
        /*
        if (! property_exists($this->row, 'user')) {
            throw new \Exception('in ['.get_class($this->row).'] property [user] not exists');
        }
        */
        // 102    Access to an undefined property Illuminate\Database\Eloquent\Model::$user.
        $user = $this->row->user;

        if (! \is_object($user) && \is_object($this->row)) {
            if (isset($this->row->user_id) && method_exists($this->row, 'user')) {
                $this->row->user()->create();
            }
            // dddx($this->row);
            return null;
        }
        if (null === $user) {
            return null;
        }
        $email = md5(mb_strtolower(trim((string) $user->email)));
        $default = urlencode('https://tracker.moodle.org/secure/attachment/30912/f3.png');

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
            'user_id' => $user->user_id,
            'lang' => app()->getLocale(),
        ];

        $post = $row->post;
        if (null === $post) {
            $row->post()->create($post_data);
        } else {
            $row->post->update($post_data);
        }
        /*
        if (\is_object($row->post)) {
            $row->post->update($post_data);
        } else {
            $row->post()->create($post_data);
        }
        */
        $res = event(new StoreProfileEvent($user));
        // $this->generateUUIDVerificationToken($user);
        Auth::guard()->login($user, true);
        // $this->guard()->login($user); ???
        Session::flash('swal', [
            'type' => 'success',
            'title' => trans('food::profile.store_success.title'),
            'text' => trans('food::profile.store_success.text'),
            'footer' => trans('food::profile.store_success.footer'),
        ]);
        // dddx($user);dddx($row);
        return $row;
    }

    /*
    public function destroyCallback(){
        $this->row->
    }
    */

    public function isSuperAdmin(): bool {
        // 232 Access to an undefined property Illuminate\Database\Eloquent\Model::$user.
        // $user = $this->row->user;
        // $user = $this->row->getRelationValue('user');
        $user = $this->row->user;
        if (null === $user) {
            return false;
        }
        $perm = $user->perm;
        if (null === $perm) {
            return false;
        }

        if ($perm->perm_type >= 4) {  // superadmin
            return true;
        }

        return false;
    }
}
