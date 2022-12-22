<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Database\Eloquent\Model;
// --- Services --
use Illuminate\Http\Request;
use Modules\Blog\Models\Privacy;
use Modules\Cms\Models\Panels\XotBasePanel;

/**
 * Class PrivacyPanel.
 */
class PrivacyPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Privacy';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * on select the option label.
     *
     * @param Privacy $row
     */
    public function optionLabel($row): string {
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
