<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class ContactPanel.
 */
class ContactPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Contact';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
   

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
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