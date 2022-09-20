<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
// --- Services --
=======
namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
>>>>>>> 968db6d (up)

use Modules\Xot\Models\Panels\XotBasePanel;

class LikePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 968db6d (up)
     */
    public static string $model = 'Modules\Blog\Models\Panels\LikePanel';

    /**
     * The single value that should be used to represent the resource when being displayed.
<<<<<<< HEAD
=======
     *
     * @var string
>>>>>>> 968db6d (up)
     */
    public static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
<<<<<<< HEAD
    public static $search = [
    ];
=======
    public static $search = array (
);
>>>>>>> 968db6d (up)

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @var array
     */
<<<<<<< HEAD
    public function with(): array {
        return [];
    }

    public function search(): array {
=======
    public function with():array {
        return [];
    }

    public function search() :array {

>>>>>>> 968db6d (up)
        return [];
    }

    /**
<<<<<<< HEAD
     * on select the option id.
     *
     * quando aggiungi un campo select, è il numero della chiave
     * che viene messo come valore su value="id"
=======
     * on select the option id
     *
     * quando aggiungi un campo select, è il numero della chiave 
     * che viene messo come valore su value="id"
     *
>>>>>>> 968db6d (up)
     */
    public function optionId(object $row) {
        return $row->getKey();
    }

    /**
     * on select the option label.
     */
<<<<<<< HEAD
    public function optionLabel(object $row): string {
=======
    public function optionLabel(object $row):string {
>>>>>>> 968db6d (up)
        return $row->area_define_name;
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
<<<<<<< HEAD
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
                'type' => 'Integer',
                'name' => 'user_id',
                'comment' => null,
            ],
        ];
=======
    public static function indexQuery(array $data, $query)
    {
        //return $query->where('user_id', $request->user()->id);
        return $query;
    }



    /**
     * Get the fields displayed by the resource.
     *
     * @return array
        'col_size' => 6,
        'sortable' => 1,
        'rules' => 'required',
        'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
        'value'=>'..',
     */
    public function fields(): array {
        return array (
  0 => 
  (object) array(
     'type' => 'Integer',
     'name' => 'user_id',
     'comment' => NULL,
  ),
);
>>>>>>> 968db6d (up)
    }

    /**
     * Get the tabs available.
<<<<<<< HEAD
     */
    public function tabs(): array {
=======
     *
     * @return array
     */
    public function tabs():array {
>>>>>>> 968db6d (up)
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
<<<<<<< HEAD
     */
    public function cards(Request $request): array {
=======
     *
     * @return array
     */
    public function cards(Request $request):array {
>>>>>>> 968db6d (up)
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Illuminate\Http\Request $request
<<<<<<< HEAD
     */
    public function filters(Request $request = null): array {
=======
     *
     * @return array
     */
    public function filters(Request $request = null):array {
>>>>>>> 968db6d (up)
        return [];
    }

    /**
     * Get the lenses available for the resource.
<<<<<<< HEAD
     */
    public function lenses(Request $request): array {
=======
     *
     * @return array
     */
    public function lenses(Request $request):array {
>>>>>>> 968db6d (up)
        return [];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
     */
    public function actions(): array {
=======
     *
     * @return array
     */
    public function actions():array {
>>>>>>> 968db6d (up)
        return [];
    }
}
