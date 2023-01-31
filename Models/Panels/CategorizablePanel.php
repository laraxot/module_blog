<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
use Modules\Cms\Models\Panels\XotBasePanel;
// --- Services --

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 781794c (rebase)
=======
>>>>>>> 648f2e6 (rebase)
use Modules\Xot\Contracts\RowsContract;
=======
use Modules\Cms\Models\Panels\XotBasePanel;
>>>>>>> 315e874 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Contracts\RowsContract;
>>>>>>> c4fb14d (Lint)
=======
>>>>>>> 781794c (rebase)
=======
=======
use Modules\Xot\Contracts\RowsContract;
>>>>>>> c4fb14d (Lint)
>>>>>>> 648f2e6 (rebase)

class CategorizablePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Categorizable';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> b022d6c (up)
=======
>>>>>>> 5376387 (Lint)
=======
=======

>>>>>>> a780d70 (up)
>>>>>>> a3494d5 (rebase)
=======
=======

>>>>>>> a780d70 (up)
=======
>>>>>>> bc82fdc (Lint)
>>>>>>> 7424c65 (rebase)
=======
=======

>>>>>>> b022d6c (up)
>>>>>>> 914e6a9 (rebase)
    /**
     * on select the option label.
     *
     * @param \Modules\Blog\Models\Categorizable $row
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function optionLabel($row): string
    {
=======
    public function optionLabel($row): string {
>>>>>>> 27d1a3f (up)
=======
    public function optionLabel($row): string
    {
>>>>>>> 42ca46e (up)
=======
    public function optionLabel($row): string {
>>>>>>> afa2edf (Lint)
        return (string) $row->id;
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
                'type' => 'Text',
                'name' => 'id',
                'comment' => 'not in Doctrine',
            ],
            1 => (object) [
                'type' => 'Text',
                'name' => 'post_id',
                'comment' => 'not in Doctrine',
            ],
            2 => (object) [
                'type' => 'Text',
                'name' => 'post_type',
                'comment' => 'not in Doctrine',
            ],
            3 => (object) [
                'type' => 'Text',
                'name' => 'photo_id',
                'comment' => 'not in Doctrine',
            ],
            4 => (object) [
                'type' => 'Text',
                'name' => 'related_type',
                'comment' => 'not in Doctrine',
            ],
            5 => (object) [
                'type' => 'Text',
                'name' => 'user_id',
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
