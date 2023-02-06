<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --

use Modules\Cms\Models\Panels\XotBasePanel;

/**
 * Class LabelPanel.
 */
class LabelPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Label';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
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
                'type' => 'Text',
                'name' => 'label',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'String',
                'name' => 'title',
                'comment' => null,
            ],
            (object) [
                'type' => 'BigInt',
                'name' => 'label_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'label_type',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array
    {
        return [];
    }
}
