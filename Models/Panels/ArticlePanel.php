<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// -------- Services -----
use Modules\Blog\Models\Article;
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\Rating\Models\Panels\Actions\RateItAction;

/**
 * Class ArticlePanel.
 */
class ArticlePanel extends XotBasePanel
{
    protected static string $model = 'Modules\Blog\Models\Article';

    protected static string $title = 'title';

    protected static array $search = [];

    /**
     * Undocumented function.
     *
     * @param Article $row
     */
    public function optionLabel($row): string
    {
        return (string) $row->title;
    }

    /**
     * @return string[]
     */
    public function with(): array
    {
        return ['post'];
    }

    /**
     * @return string[]
     */
    public function search(): array
    {
        return [
            'post.title', 'post.subtitle', 'post.txt',
        ];
    }

    /**
     * @return object[]
     */
    public function fields(): array
    {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_size' => 4,
            ],

            (object) [
                'type' => 'SelectParent',
                'name' => 'parent_id',
                'col_size' => 4,
            ],

            (object) [
                'type' => 'Integer',
                'name' => 'pos',
                'col_size' => 4,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.title',
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.subtitle',
                'except' => ['index'],
                'col_size' => 6,
            ],
            (object) [
                'type' => 'UploadImage',
                'name' => 'post.image_src',
                // 'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'WysiwygSceditor',
                // 'type' => 'WysiwygVue',
                'name' => 'post.txt',
                'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'SelectMultipleRelationship',
                'name' => 'categories',
                'col_size' => 6,
            ],
            /*
            (object) [
                'type' => 'SelectMultipleRelationship',
                'name' => 'tags',
                'col_size' => 6,
            ],
            */
            (object) [
                'type' => 'DateDateTime',
                'name' => 'submitted_at',
                'col_size' => 4,
            ],
            (object) [
                'type' => 'DateDateTime',
                'name' => 'approved_at',
                'col_size' => 4,
            ],
            (object) [
                'type' => 'CheckboxBoolean',
                'name' => 'is_pinned',
                'col_size' => 4,
            ],

            /*
            (object) [
                'type' => 'CheckboxSiNo',
                'name' => 'is_featured',
                //'col_size' => 12,
            ],
            //*/
            /*
            (object) [
                'type' => 'RadioAnimatedSwitch',
                //'name' => 'post[subtitle]'
                'name' => 'is_featured',
                //'col_size' => 12,
            ],
            */
            /*
            (object) [
            'type' => 'String',
            'name' => 'article_type',
            'col_size' => 6,
            ],
            (object) [
            'type' => 'DateDateTime',
            'name' => 'published_at',
            //'rules' => new \Modules\Xot\Rules\DateTimeRule(),
            //'rules' => 'nullable|date_format:d/m/Y H:i', // https://laravel.com/docs/5.8/validation
            //'publish_at' => 'nullable|date',
            'col_size' => 6,
            ],
             */
            /*
            (object) [
                'type' => 'Rating',
                'name' => 'myRatings',
                'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'Rating',
                'name' => 'ratings',
                'except' => ['edit', 'create'],
                'col_size' => 12,
            ],
            */
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array
    {
        return [
            new RateItAction(),
            // new Actions\ChangePosAction(),
            new Actions\CreateArticleAction(),
        ];
    }
}
