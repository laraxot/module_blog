<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class AmenityPanel.
 */
class AmenityPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Amenity';

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

    public function search(): array {
        return [];
    }

    /**
     * on select the option id.
     *
     * @param object $row
     *
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->post_id;
    }

    public function optionLabel(object $row): string {
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
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'related_type',
                'rules' => 'required',
                'comment' => null,
            ],
        ];
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
