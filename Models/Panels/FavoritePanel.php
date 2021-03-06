<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class FavoritePanel
 * @package Modules\Blog\Models\Panels
 */
class FavoritePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Blog\Models\Favorite';


    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            0 => (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            1 => (object) [
                'type' => 'BigInt',
                'name' => 'post_id',
                'comment' => null,
            ],
            2 => (object) [
                'type' => 'String',
                'name' => 'post_type',
                'comment' => null,
            ],
            3 => (object) [
                'type' => 'Integer',
                'name' => 'auth_user_id',
                'comment' => null,
            ],
        ];
    }


    /**
     * Get the actions available for the resource.
     *
     *
     * @param Request|null $request
     * @return array
     */
    public function actions(Request $request = null) {
        return [
            new Actions\Favorite\NoMoreFavoriteAction(Auth::id()),
        ];
    }
}
