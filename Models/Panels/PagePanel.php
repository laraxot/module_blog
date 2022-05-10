<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

//--- Services --
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Support\Renderable;
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
use Modules\Blog\Models\Panels\Traits\XotBasePanelTrait;
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class PagePanel.
 */
class PagePanel extends XotBasePanel {
    use XotBasePanelTrait;
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Page';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    protected static array $search = [
    ];

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
<<<<<<< HEAD
<<<<<<< HEAD
     * index navigation.
     */
    public function indexNav(): ?Renderable {
        [$containers,$items] = params2ContainerItem();
        $last_item = last($items);
        if (! inAdmin()) {
            //siccome non so dove metterlo, per ora dentro pub_theme
            $view = 'pub_theme::pages.'.$last_item.'.index.nav';

            return view()->make($view);
        }

        return null;
    }

    /**
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
     * Get the fields displayed by the resource.
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_size' => 6,
            ],

            (object) [
                'type' => 'SelectParent',
                //'sub_type' => 'Parent',
                //'name' => 'post[subtitle]'
                'name' => 'parent_id',
                'col_size' => 6,
            ],

            (object) [
                'type' => 'Integer',
                'name' => 'pos',
                'col_size' => 6,
                //'rules'=>'unique'
            ],

            (object) [
                'type' => 'String',
                'name' => 'icon',
                'col_size' => 6,
                //'rules'=>'unique'
            ],

            (object) [
                'type' => 'Text',
                //'name' => 'post[title]',
                'name' => 'post.title',
                'col_size' => 12,
            ],
            (object) [
                'type' => 'Image',
                //'name' => 'post[title]',
                'name' => 'post.image_src',
                'col_size' => 12,
            ],
            //*/
            (object) [
                'type' => 'Textarea',
                //'name' => 'post[subtitle]'
                'name' => 'post.subtitle',
                'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'String',
                //'name' => 'post[subtitle]'
                'name' => 'blade',
                //'except' => ['index'],
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Checkbox',
                //'name' => 'post[subtitle]'
                'name' => 'is_modal',
                //'except' => ['index'],
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Integer',
                //'name' => 'post[subtitle]'
                'name' => 'status',
                //'except' => ['index'],
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Wysiwyg',
                //'type' => 'Textarea',
                'name' => 'post.txt',
                'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'CellCollapse',
                //'type' => 'Textarea',
                'name' => 'Seo',
                'fields' => $this->seoFields(),
                'col_size' => 12,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return array
>>>>>>> 9f39ec2 (first)
=======
     *
     * @return array
>>>>>>> ffb8c7b (first)
     */
    public function actions(): array {
        return [
            new Actions\SendMsgAction(),
        ];
    }
}
