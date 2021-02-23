<<<<<<< HEAD
<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//-------- Services -----
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class ArticlePanel
 * @package Modules\Blog\Models\Panels
 */
class ArticlePanel extends XotBasePanel {
    /**
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Article';

    /**
     * @var string
     */
    protected static string $title = 'title';

    /**
     * @var array
     */
    protected static array $search = [];

    /**
     * @param object $row
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->title;
    }

    /**
     * @return string[]
     */
    public function with():array {
        return ['post'];
    }

    /**
     * @return string[]
     */
    public function search() :array {

        return [
            'post.title', 'post.subtitle',
        ];
    }

    /**
     * @return object[]
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
                'type' => 'Image',
                //'name' => 'post[subtitle]'
                'name' => 'post.image_src',
                //'except' => ['index'],
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
                'type' => 'SelectMultipleRelationship',
                //'name' => 'post[subtitle]'
                'name' => 'categories',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'SelectMultipleRelationship',
                //'name' => 'post[subtitle]'
                'name' => 'tags',
                'col_bs_size' => 12,
            ],

            (object) [
                'type' => 'CheckboxSiNo',
                //'name' => 'post[subtitle]'
                'name' => 'is_featured',
                //'col_bs_size' => 12,
            ],

            /*
            (object) [
                'type' => 'RadioAnimatedSwitch',
                //'name' => 'post[subtitle]'
                'name' => 'is_featured',
                //'col_bs_size' => 12,
            ],
            */
            /*
            (object) [
            'type' => 'String',
            'name' => 'article_type',
            'col_bs_size' => 6,
            ],
            (object) [
            'type' => 'DateTime',
            'name' => 'published_at',
            //'rules' => new \Modules\Xot\Rules\DateTimeRule(),
            //'rules' => 'nullable|date_format:d/m/Y H:i', // https://laravel.com/docs/5.8/validation
            //'publish_at' => 'nullable|date',
            'col_bs_size' => 6,
            ],
             */
            /*
            (object) [
                'type' => 'Rating',
                'name' => 'myRatings',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Rating',
                'name' => 'ratings',
                'except' => ['edit', 'create'],
                'col_bs_size' => 12,
            ],
            */
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
            new Actions\RateItAction(),
            //new Actions\ChangePosAction(),
        ];
    }
}
=======
<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//-------- Services -----
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class ArticlePanel
 * @package Modules\Blog\Models\Panels
 */
class ArticlePanel extends XotBasePanel {
    /**
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Article';

    /**
     * @var string
     */
    protected static string $title = 'title';

    /**
     * @var array
     */
    protected static array $search = [];

    /**
     * @param object $row
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->title;
    }

    /**
     * @return string[]
     */
    public function with():array {
        return ['post'];
    }

    /**
     * @return string[]
     */
    public function search() :array {

        return [
            'post.title', 'post.subtitle',
        ];
    }

    /**
     * @return object[]
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
                'type' => 'Image',
                //'name' => 'post[subtitle]'
                'name' => 'post.image_src',
                //'except' => ['index'],
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
                'type' => 'SelectMultipleRelationship',
                //'name' => 'post[subtitle]'
                'name' => 'categories',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'SelectMultipleRelationship',
                //'name' => 'post[subtitle]'
                'name' => 'tags',
                'col_bs_size' => 12,
            ],

            (object) [
                'type' => 'CheckboxSiNo',
                //'name' => 'post[subtitle]'
                'name' => 'is_featured',
                //'col_bs_size' => 12,
            ],

            /*
            (object) [
                'type' => 'RadioAnimatedSwitch',
                //'name' => 'post[subtitle]'
                'name' => 'is_featured',
                //'col_bs_size' => 12,
            ],
            */
            /*
            (object) [
            'type' => 'String',
            'name' => 'article_type',
            'col_bs_size' => 6,
            ],
            (object) [
            'type' => 'DateTime',
            'name' => 'published_at',
            //'rules' => new \Modules\Xot\Rules\DateTimeRule(),
            //'rules' => 'nullable|date_format:d/m/Y H:i', // https://laravel.com/docs/5.8/validation
            //'publish_at' => 'nullable|date',
            'col_bs_size' => 6,
            ],
             */
            /*
            (object) [
                'type' => 'Rating',
                'name' => 'myRatings',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Rating',
                'name' => 'ratings',
                'except' => ['edit', 'create'],
                'col_bs_size' => 12,
            ],
            */
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
            new Actions\RateItAction(),
            //new Actions\ChangePosAction(),
        ];
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
