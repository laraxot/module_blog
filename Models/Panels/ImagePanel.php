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
     * The relationships that should be eager loaded on index queries.
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
