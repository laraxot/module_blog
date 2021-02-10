<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class PostLinkPanel.
 */
class PostLinkPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\PostLink';

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
     *
     * @var array
     */
    public function with(): array {
        return [];
    }

    /**
     * [description].
     *
     * @return array

     */
    public function search() :array {

        return [];
    }

    /**
     * [description].
     *
     * @param object $row
     *
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->area_id;
    }

    /**
     * on select the option label.
     *
     * @param object $row
     *
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->area_define_name;
    }

    /**
     * Get the fields displayed by the resource.
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
                'name' => 'id',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'url',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'title',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'type',
                'comment' => 'not in Doctrine',
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

        return $tabs_name;
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
        return [];
    }
}
