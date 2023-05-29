<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --
use Modules\Cms\Models\Panels\XotBasePanel;

/**
 * Class PostPanel.
 */
class PostPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Lang\Models\Post';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
     * 'value'=>'..',.
     */
    public function fields(): array
    {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'post_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'lang',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'guid',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'title',
                'rules' => 'required',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'subtitle',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_type',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'txt',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'image_src',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'image_alt',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'image_title',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'meta_description',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'meta_keyword',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'author_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'url',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'url_lang',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'image_resize_src',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array
    {
        return [
            new Actions\ClearDuplicatesAction(),
            new Actions\DeleteNoPostIdAction(),
        ];
    }
}
