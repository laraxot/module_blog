<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

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
     * The columns that should be searched.
     */
    protected static array $search = [];

    /**
     * The relationships that should be eager loaded on index queries.
     */
    public function with(): array {
        return [];
    }

    /**
     * on select the option id.
     *
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->post_id;
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
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
