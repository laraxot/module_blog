<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
//--- Services --

use Illuminate\Support\Facades\App;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class TagPanel.
 */
class TagPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Tag';

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
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return $row->title;
    }

    public function setLabel(string $label): ModelContract {
        $model = $this->row;
        $res = $model::whereHas('post',
            function (Builder $query) use ($label) {
                $query->where('title', 'like', $label);
            }
        )->first();
        if (is_object($res)) {
            return $res;
        }
        $me = $model->create();
        // dddx([$me, $me->getKey()]);
        $post = $model->post()->create(
            [
                //'post_id' => $me->getKey(),
                'title' => $label,
                'lang' => App::getLocale(),
            ]
        );
        if (null == $post->post_id) {
            $post->post_id = $me->getKey();
            $post->save();
        }

        return $me;
    }

    /**
     * @return null
     */
    public function indexNav() {
        return null;
    }

    /**
     * @return object[]
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
                'name' => 'related_type',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request) {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(Request $request = null) {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request) {
        return [];
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
