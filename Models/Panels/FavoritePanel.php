<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Support\Facades\Auth;
// --- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class FavoritePanel.
 */
class FavoritePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
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
                'name' => 'user_id',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [
            new Actions\Favorite\NoMoreFavoriteAction(Auth::id()),
        ];
    }
}
