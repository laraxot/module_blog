<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class ArticleMorphPanel.
 */
class ArticleMorphPanel extends XotBasePanel {
    protected static string $model = 'Modules\Blog\Models\ArticleMorph';

    /**
     * @return object[]
     */
    public function fields(): array {
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
                'name' => 'user_id',
                'comment' => 'not in Doctrine',
            ],
        ];
    }
}
