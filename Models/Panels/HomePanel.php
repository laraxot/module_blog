<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class HomePanel.
 */
class HomePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Home';

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
                //'name' => 'post[title]',
                'name' => 'post.title',
                'col_bs_size' => 12,
            ],
            //*/
            (object) [
                'type' => 'Textarea',
                //'name' => 'post[subtitle]'
                'name' => 'post.subtitle',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Wysiwyg',
                //'name' => 'post[subtitle]'
                'name' => 'post.txt',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Image',
                'name' => 'icon_src',
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\ArtisanAction(request()->input('cmd', '')),
            new \Modules\Blog\Models\Panels\Actions\RateItAction(),
            new Actions\TestAction(),
        ];
    }

    /**
     * @return bool
     */
    public function hasLang() {
        return true;
    }
}