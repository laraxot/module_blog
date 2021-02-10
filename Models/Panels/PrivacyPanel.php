<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class PrivacyPanel
 * @package Modules\Blog\Models\Panels
 */
class PrivacyPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Privacy';

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
    protected static array $search = [];

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
     * on select the option id.
     * @param object $row
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->post_id;
    }

    /**
     * on select the option label.
     * @param object $row
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->title.' ['.$row->related_type.']';
    }

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'related_type',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.title',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'obligatory',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.subtitle',
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'post.txt',
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

        return [];
    }

    /**
     * Get the cards available for the request.
     *
     * @param Request $request
     * @return array
     */
    public function cards(Request $request) {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param Request|null $request
     *
     * @return array
     */
    public function filters(Request $request = null) {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param Request $request
     * @return array
     */
    public function lenses(Request $request) {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     *
     * @return array
     */
    public function actions() {
        return [];
    }
}
