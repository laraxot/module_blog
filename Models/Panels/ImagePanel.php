<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class ImagePanel.
 */
class ImagePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Image';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    public static array $search = [
    ];

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_type',
                'comment' => null,
            ],
            (object) [
                'type' => 'BigInt',
                'name' => 'post_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'src',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'src_out',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'width',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'height',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'user_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'note',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [];
    }
}