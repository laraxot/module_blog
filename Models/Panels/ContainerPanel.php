<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --

use Modules\Cms\Models\Panels\XotBasePanel;

/**
 * Class ContainerPanel.
 */
class ContainerPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Container';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */

    /**
     * Get the fields displayed by the resource.
     * 'value'=>'..',.
     */
    public function fields(): array
    {
        return [
            (object) [
                'type' => 'Text',
                'name' => 'id',
                'comment' => 'not in Doctrine',
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
