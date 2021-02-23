<<<<<<< HEAD
<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Blog\Models\Panels\Traits\XotBasePanelTrait;
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class PagePanel
 * @package Modules\Blog\Models\Panels
 */
class PagePanel extends XotBasePanel {
    use XotBasePanelTrait;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Page';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    protected static array $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return string[]
     * @return string[]
     * @var array
     */
    public function with():array {
        return ['post'];
    }

    /**
     * on select the option id.
     */

    /**
     * on select the option label.
     * @param object $row
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->title;
    }

    /**
     * Get the fields displayed by the resource.
     *

     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_bs_size' => 6,
            ],

            (object) [
                'type' => 'Select',
                'sub_type' => 'Parent',
                //'name' => 'post[subtitle]'
                'name' => 'parent_id',
                'col_bs_size' => 6,
            ],

            (object) [
                'type' => 'Integer',
                'name' => 'pos',
                'col_bs_size' => 6,
                //'rules'=>'unique'
            ],

            (object) [
                'type' => 'String',
                'name' => 'icon',
                'col_bs_size' => 6,
                //'rules'=>'unique'
            ],

            (object) [
                'type' => 'Text',
                //'name' => 'post[title]',
                'name' => 'post.title',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Image',
                //'name' => 'post[title]',
                'name' => 'post.image_src',
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
                'type' => 'String',
                //'name' => 'post[subtitle]'
                'name' => 'blade',
                //'except' => ['index'],
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Checkbox',
                //'name' => 'post[subtitle]'
                'name' => 'is_modal',
                //'except' => ['index'],
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Integer',
                //'name' => 'post[subtitle]'
                'name' => 'status',
                //'except' => ['index'],
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Wysiwyg',
                //'type' => 'Textarea',
                'name' => 'post.txt',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'CellCollapse',
                //'type' => 'Textarea',
                'name' => 'Seo',
                'fields' => $this->seoFields(),
                'col_bs_size' => 12,
            ],
        ];
    }


    /**
     * Get the actions available for the resource.
     *

     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\SendMsgAction(),
        ];
    }
}
=======
<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Blog\Models\Panels\Traits\XotBasePanelTrait;
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class PagePanel
 * @package Modules\Blog\Models\Panels
 */
class PagePanel extends XotBasePanel {
    use XotBasePanelTrait;
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Page';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    protected static array $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return string[]
     * @return string[]
     * @var array
     */
    public function with():array {
        return ['post'];
    }

    /**
     * on select the option id.
     */

    /**
     * on select the option label.
     * @param object $row
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->title;
    }

    /**
     * Get the fields displayed by the resource.
     *

     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_bs_size' => 6,
            ],

            (object) [
                'type' => 'Select',
                'sub_type' => 'Parent',
                //'name' => 'post[subtitle]'
                'name' => 'parent_id',
                'col_bs_size' => 6,
            ],

            (object) [
                'type' => 'Integer',
                'name' => 'pos',
                'col_bs_size' => 6,
                //'rules'=>'unique'
            ],

            (object) [
                'type' => 'String',
                'name' => 'icon',
                'col_bs_size' => 6,
                //'rules'=>'unique'
            ],

            (object) [
                'type' => 'Text',
                //'name' => 'post[title]',
                'name' => 'post.title',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Image',
                //'name' => 'post[title]',
                'name' => 'post.image_src',
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
                'type' => 'String',
                //'name' => 'post[subtitle]'
                'name' => 'blade',
                //'except' => ['index'],
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Checkbox',
                //'name' => 'post[subtitle]'
                'name' => 'is_modal',
                //'except' => ['index'],
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Integer',
                //'name' => 'post[subtitle]'
                'name' => 'status',
                //'except' => ['index'],
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Wysiwyg',
                //'type' => 'Textarea',
                'name' => 'post.txt',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'CellCollapse',
                //'type' => 'Textarea',
                'name' => 'Seo',
                'fields' => $this->seoFields(),
                'col_bs_size' => 12,
            ],
        ];
    }


    /**
     * Get the actions available for the resource.
     *

     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\SendMsgAction(),
        ];
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
