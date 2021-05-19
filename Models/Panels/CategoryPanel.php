<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class CategoryPanel
 * @package Modules\Blog\Models\Panels
 */
class CategoryPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Category';

    /**
     * on select the option label.
     * @param object $row
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->title;
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
                'name' => 'name',
                'comment' => 'not in Doctrine',
            ],
             (object) [
                'type' => 'Text',
                'name' => 'guid',
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
