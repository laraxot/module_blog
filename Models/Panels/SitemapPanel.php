<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class SitemapPanel.
 */
class SitemapPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Blog\Models\Sitemap';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) ([
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ]),
            (object) ([
                'type' => 'String',
                'name' => 'created_by',
                'comment' => null,
            ]),
            (object) ([
                'type' => 'String',
                'name' => 'updated_by',
                'comment' => null,
            ]),
            (object) ([
                'type' => 'DateDateTime',
                'name' => 'created_at',
                'comment' => null,
            ]),
            (object) ([
                'type' => 'DateDateTime',
                'name' => 'updated_at',
                'comment' => null,
            ]),
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs(): array {
        $tabs_name = [];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request): array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request): array {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(Request $request = null): array {
        return [];
    }
}
