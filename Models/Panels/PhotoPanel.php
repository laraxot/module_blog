<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

<<<<<<< HEAD
// --- Services --
use Modules\Rating\Models\Panels\Actions\RateItAction;
use Modules\Xot\Models\Panels\XotBasePanel;

// ---- bases --
=======
//--- Services --
use Modules\Rating\Models\Panels\Actions\RateItAction;
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --
>>>>>>> 968db6d (up)

/**
 * Class PhotoPanel.
 */
class PhotoPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Photo';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    protected static array $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
     */
    public function with(): array {
        return [];
    }

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],

            (object) [
                'type' => 'Text',
                'name' => 'post.title',
                'col_size' => 12,
<<<<<<< HEAD
                // 'except' => ['index'],
=======
                //'except' => ['index'],
>>>>>>> 968db6d (up)
            ],

            (object) [
                'type' => 'Text',
                'name' => 'post.image_title',
                'col_size' => 12,
<<<<<<< HEAD
                // 'except' => ['index'],
=======
                //'except' => ['index'],
>>>>>>> 968db6d (up)
            ],

            (object) [
                'type' => 'Text',
                'name' => 'post.image_alt',
                'col_size' => 12,
<<<<<<< HEAD
                // 'except' => ['index'],
            ],

            (object) [
                // 'type' => 'UnisharpImg', //'Html5UploadImg',
                'type' => 'Image',
                'name' => 'post.image_src',
                'col_size' => 12,
                // 'except' => ['index'],
=======
                //'except' => ['index'],
            ],

            (object) [
                //'type' => 'UnisharpImg', //'Html5UploadImg',
                'type' => 'Image',
                'name' => 'post.image_src',
                'col_size' => 12,
                //'except' => ['index'],
>>>>>>> 968db6d (up)
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [
            new RateItAction(),
<<<<<<< HEAD
            // new \Modules\Xot\Models\Panels\Actions\UploadImageTestAction(),
=======
            //new \Modules\Xot\Models\Panels\Actions\UploadImageTestAction(),
>>>>>>> 968db6d (up)
        ];
    }
}
