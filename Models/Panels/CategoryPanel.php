<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --
use Modules\Blog\Models\Category;
use Modules\Cms\Models\Panels\XotBasePanel;

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
     *
     * @param Category $row
     */
    public function optionLabel($row): string {
        // $name = $row->name;
        // if (is_array($name)) {
        //     $name = implode('-', $name);
        // }

        // return (string) $name;
        return (string) $row->name;
    }

    /**
     * @return array
     */
    public function optionsSelect() {
        // $rows = $this->row->all();

        $rows = Category::get();
        $rows2 = $rows->map(function ($item) {
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

        'value'=>'..',
     */
    public function fields(): array {
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
    public function actions(): array {
        return [];
    }
}
