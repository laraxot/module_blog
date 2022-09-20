<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
<<<<<<< HEAD
// --- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

// ---- bases --
=======
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --
>>>>>>> 968db6d (up)

/**
 * Class RatingPanel.
 */
class RatingPanel extends XotBasePanel {
    protected static string $model = 'Modules\Rating\Models\Rating';

    protected static string $title = 'title';

    protected static array $search = [];

    public function search(): array {
        return [];
    }

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return string[]
     * @return string[]
     */
    public function with(): array {
        return ['post'];
    }

    /**
     * on select the option id.
     */

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return $row->title;
    }

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
<<<<<<< HEAD
            // *
=======
            //*
>>>>>>> 968db6d (up)
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
                'type' => 'Decimal',
                'name' => 'pivot.rating',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'pivot.user_id',
            ],
            /*
            (object) [
            'type' => 'Text',
            'name' => 'post.subtitle',
            ],
            (object) [
            'type' => 'Textarea',
            'name' => 'post.txt',
            ],
             */
            // */
            /*
        (object) [
        'type' => 'Rating',
        'name' => 'myRatings',
        ],
         */
        ];
    }

    /**
     * Get the tabs available.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 968db6d (up)
     */
    public function tabs(): array {
        $tabs_name = [];

        return [];
    }

    /**
     * Get the cards available for the request.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 968db6d (up)
     */
    public function cards(Request $request): array {
        return [];
    }

    /**
     * Get the filters available for the resource.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 968db6d (up)
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 968db6d (up)
     */
    public function lenses(Request $request): array {
        return [];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 968db6d (up)
     */
    public function actions(): array {
        return [];
    }

    /*
public function actions()
{
return [];
}

public function indexEdit(){
$params = optional(\Route::current())->parameters();
list($containers,$items)=params2ContainerItem($params);
}
public function bodyContentView($params=[]){
extract($params);
$route_params = optional(\Route::current())->parameters();
list($containers,$items)=params2ContainerItem($route_params);
//return $_layout->view_extend.'.body.multi_select';
return $_layout->view_extend.'.body.rating';
}
 */
}
