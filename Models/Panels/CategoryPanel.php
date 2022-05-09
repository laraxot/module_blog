<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class CategoryPanel.
 */
class CategoryPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Category';

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return ''.$row->title;
    }

    /**
     * Get the fields displayed by the resource.

        'value'=>'..',
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Text',
                'name' => 'name',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'guid',
                'comment' => 'not in Doctrine',
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [];
    }
}
