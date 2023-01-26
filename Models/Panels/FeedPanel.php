<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --
use Modules\Cms\Models\Panels\XotBasePanel;

/**
 * Class FeedPanel.
 */
class FeedPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Feed';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
        'value'=>'..',
     */

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [];
    }
}
