<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class LocationPanel
 * @package Modules\Blog\Models\Panels
 */
class LocationPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Location';

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
     * @return string[]
     * @return string[]
     * @var array
     */
    public function with():array {
        return ['post', 'images'];
    }

    /**
     * @return array
     */
    public function search() :array {

        return [];
    }


    /**
     * on select the option label.
     * @param object $row
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->area_define_name;
    }

    /**
     * Get the fields displayed by the resource.
     *

     *
     * @return array
        'col_bs_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
        'value'=>'..',
     */


    public function fields(): array {
        return [
            (object) [
                'type' => 'Text',
                'name' => 'post_id',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'latitude',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'longitude',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'address1',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'address2',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'address3',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'city',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'zip_code',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'country',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'state',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'phone',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'display_phone',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'price',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'is_closed',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'review_count',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'yelp_url',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'rating',
                'comment' => 'not in Doctrine',
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
        return [];
    }
}
