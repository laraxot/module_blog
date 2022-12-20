<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
// --- Services --
use Modules\Cms\Models\Panels\XotBasePanel;

/**
 * Class PostRelatedMorphPivotPanel.
 */
class PostRelatedMorphPivotPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Lang\Models\PostRelatedMorphPivot';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */

    /*
        'col_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
        'value'=>'..',
     */

    /**
     * @return null
     */
    public function indexNav(): ?\Illuminate\Contracts\Support\Renderable {
        return null;
    }

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Integer',
                'name' => 'post_id',
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_type',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'related_id',
            ],
            (object) [
                'type' => 'String',
                'name' => 'related_type',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'pos',
            ],
            (object) [
                'type' => 'Decimal',
                'name' => 'price',
            ],
            (object) [
                'type' => 'String',
                'name' => 'price_currency',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'launch_avaible',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'dinner_avaible',
            ],
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array {
        $tabs_name = [];

        return [];
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(Request $request): array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    public function lenses(Request $request): array {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [];
    }
}
