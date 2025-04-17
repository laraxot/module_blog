<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --
use Illuminate\Contracts\Support\Renderable;
use Modules\Blog\Models\Categorizable;
use Modules\Blog\Models\Category;
use Modules\Cms\Models\Panels\XotBasePanel;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

/**
 * Class CategoryPanel.
 */
class CategoryPanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Category';

    /**
     * index navigation.
     */
    public function indexNav(): ?Renderable
    {
        $categorizable_types = Categorizable::get()->pluck('categorizable_type', 'categorizable_type')->toArray();

        /**
         * @phpstan-var view-string
         */
        $view = 'blog::categories.index.nav';
        $view_params = [
            'view' => $view,
            'categorizable_types' => $categorizable_types,
        ];

        return view($view, $view_params);

        return null;
    }

    /**
     * Build an "index" query for the given resource.
     * --  \Illuminate\Database\Eloquent\Relations.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     *-- \Illuminate\Database\Eloquent\Builder
     *
     * @return \Spatie\QueryBuilder\QueryBuilder
     */
    public function indexQuery(array $data, $query)
    {
        $query = QueryBuilder::for($query)

            ->allowedFilters([
                AllowedFilter::scope('of_type'),
            ]);

        return $query;
    }

    /**
     * on select the option label.
     *
     * @param Category $row
     */
    public function optionLabel($row): string
    {
        /**
         * @var string $panel_name
         */
        $panel_name = $row->name;

        return strval($panel_name);
    }

    /**
     * @return array
     */
    public function optionsSelect()
    {
        // $rows = $this->row->all();

        $rows = Category::get();
        $rows2 = $rows->map(
            function ($item) {
                // dddx($item);
                if ('' !== $item->name) {
                    // dddx($item->name);
                    return [
                        'label' => $item->name,
                        'key' => $item->id,
                    ];
                }
            })->all();

        // dddx($rows2);

        return $rows2;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * 'value'=>'..',
     */
    public function fields(): array
    {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => 'not in Doctrine',
            ],
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
    public function actions(): array
    {
        return [];
    }
}
