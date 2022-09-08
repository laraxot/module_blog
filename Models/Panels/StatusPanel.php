<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
use Modules\Blog\Models\Status;
// --- Services --

use Modules\Xot\Contracts\RowsContract;
use Modules\Xot\Models\Panels\XotBasePanel;

class StatusPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = Status::class;
    public Status $row;

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * on select the option label.
     *
     * @param Status $row
     */
    public function optionLabel($row): string {
        return (string) $row->name;
    }

    /**
     * index navigation.
     */
    public function indexNav(): ?\Illuminate\Contracts\Support\Renderable {
        return null;
    }

    /**
     * Build an "index" query for the given resource.
     *
     * @param RowsContract $query
     *
     * @return RowsContract
     */
    public static function indexQuery(array $data, $query) {
        // return $query->where('user_id', $request->user()->id);
        return $query;
    }

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array {
        return [
            0 => (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            1 => (object) [
                'type' => 'String',
                'name' => 'name',
                'rules' => 'required',
                'comment' => null,
            ],
            2 => (object) [
                'type' => 'Text',
                'name' => 'reason',
                'comment' => null,
            ],
            3 => (object) [
                'type' => 'String',
                'name' => 'model_type',
                'rules' => 'required',
                'comment' => null,
            ],
            4 => (object) [
                'type' => 'Bigint',
                'name' => 'model_id',
                'rules' => 'required',
                'comment' => null,
            ],
            5 => (object) [
                'type' => 'Datetime',
                'name' => 'created_at',
                'comment' => null,
            ],
            6 => (object) [
                'type' => 'Datetime',
                'name' => 'updated_at',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(Request $request): array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
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
