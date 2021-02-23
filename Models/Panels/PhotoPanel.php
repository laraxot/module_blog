<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class PhotoPanel
 * @package Modules\Blog\Models\Panels
 */
class PhotoPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Photo';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    protected static array $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return array

     * @var array
     */
    public function with():array {
        return [];
    }

    /**
     * Get the fields displayed by the resource.
     *

     *
     * @return array
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
                'col_bs_size' => 12,
                //'except' => ['index'],
            ],

            (object) [
                'type' => 'Text',
                'name' => 'post.image_title',
                'col_bs_size' => 12,
                //'except' => ['index'],
            ],

            (object) [
                'type' => 'Text',
                'name' => 'post.image_alt',
                'col_bs_size' => 12,
                //'except' => ['index'],
            ],

            (object) [
                //'type' => 'UnisharpImg', //'Html5UploadImg',
                'type' => 'Image',
                'name' => 'post.image_src',
                'col_bs_size' => 12,
                //'except' => ['index'],
            ],
        ];
    }



    /**
     * Get the actions available for the resource.
     *
     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\RateItAction(),
        ];
    }
}
