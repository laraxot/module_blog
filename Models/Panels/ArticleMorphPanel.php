<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class ArticleMorphPanel
 * @package Modules\Blog\Models\Panels
 */
class ArticleMorphPanel extends XotBasePanel
{
    /**
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\ArticleMorph';


    /**
     * @return object[]
     */
    public function fields(): array
    {
        return [
            (object) [
                'type' => 'Text',
                'name' => 'id',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post_id',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post_type',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'article_id',
                'comment' => 'not in Doctrine',
            ],
            /*
            (object) [
                'type' => 'Text',
                'name' => 'related_type',
                'comment' => 'not in Doctrine',
            ],
            */
            (object) [
                'type' => 'Text',
                'name' => 'auth_user_id',
                'comment' => 'not in Doctrine',
            ],
        ];
    }


}
