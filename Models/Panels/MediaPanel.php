<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
use Modules\Xot\Contracts\RowsContract;
// --- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

class MediaPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Media';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
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
     * quando aggiungi un campo select, è il numero della chiave
     * che viene messo come valore su value="id"
     *
     * @param Modules\Blog\Models\Media $row
     *
     * @return int|string|null
     */
    public function optionId($row) {
        return $row->getKey();
    }

    /**
     * on select the option label.
     *
     * @param mixed $row
     */
    public function optionLabel($row): string {
        return (string) $row->title;
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
                'name' => 'model_type',
                'rules' => 'required',
                'comment' => null,
            ],
            2 => (object) [
                'type' => 'Bigint',
                'name' => 'model_id',
                'rules' => 'required',
                'comment' => null,
            ],
            3 => (object) [
                'type' => 'String',
                'name' => 'uuid',
                'comment' => null,
            ],
            4 => (object) [
                'type' => 'String',
                'name' => 'collection_name',
                'rules' => 'required',
                'comment' => null,
            ],
            5 => (object) [
                'type' => 'String',
                'name' => 'name',
                'rules' => 'required',
                'comment' => null,
            ],
            6 => (object) [
                'type' => 'String',
                'name' => 'file_name',
                'rules' => 'required',
                'comment' => null,
            ],
            7 => (object) [
                'type' => 'String',
                'name' => 'mime_type',
                'comment' => null,
            ],
            8 => (object) [
                'type' => 'String',
                'name' => 'disk',
                'rules' => 'required',
                'comment' => null,
            ],
            9 => (object) [
                'type' => 'String',
                'name' => 'conversions_disk',
                'comment' => null,
            ],
            10 => (object) [
                'type' => 'Bigint',
                'name' => 'size',
                'rules' => 'required',
                'comment' => null,
            ],
            11 => (object) [
                'type' => 'Text',
                'name' => 'manipulations',
                'rules' => 'required',
                'comment' => null,
            ],
            12 => (object) [
                'type' => 'Text',
                'name' => 'custom_properties',
                'rules' => 'required',
                'comment' => null,
            ],
            13 => (object) [
                'type' => 'Text',
                'name' => 'generated_conversions',
                'rules' => 'required',
                'comment' => null,
            ],
            14 => (object) [
                'type' => 'Text',
                'name' => 'responsive_images',
                'rules' => 'required',
                'comment' => null,
            ],
            15 => (object) [
                'type' => 'Integer',
                'name' => 'order_column',
                'comment' => null,
            ],
            16 => (object) [
                'type' => 'Integer',
                'name' => 'user_id',
                'rules' => 'required',
                'comment' => null,
            ],
            17 => (object) [
                'type' => 'Text',
                'name' => 'time_from',
                'comment' => 'not in Doctrine',
            ],
            18 => (object) [
                'type' => 'Text',
                'name' => 'time_to',
                'comment' => 'not in Doctrine',
            ],
            19 => (object) [
                'type' => 'DateDatetime',
                'name' => 'created_at',
                'comment' => null,
            ],
            20 => (object) [
                'type' => 'DateDatetime',
                'name' => 'updated_at',
                'comment' => null,
            ],
            21 => (object) [
                'type' => 'String',
                'name' => 'created_by',
                'comment' => null,
            ],
            22 => (object) [
                'type' => 'String',
                'name' => 'updated_by',
                'comment' => null,
            ],
            23 => (object) [
                'type' => 'Text',
                'name' => 'title',
                'comment' => 'not in Doctrine',
            ],
            24 => (object) [
                'type' => 'Text',
                'name' => 'subtitle',
                'comment' => 'not in Doctrine',
            ],
            25 => (object) [
                'type' => 'Text',
                'name' => 'guid',
                'comment' => 'not in Doctrine',
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