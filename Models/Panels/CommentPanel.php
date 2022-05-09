<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class CommentPanel.
 */
class CommentPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Comment';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],

            (object) [
                'type' => 'Integer',
                'name' => 'post_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'post_type',
                'comment' => null,
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'txt',
                'comment' => null,
            ],

            (object) [
                'type' => 'Text',
                'name' => 'related_type',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'user_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'Test',
                'name' => 'ratings',
                'comment' => null,
            ],
        ];
    }
}
