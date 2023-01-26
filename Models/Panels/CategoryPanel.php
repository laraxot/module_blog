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
<<<<<<< HEAD
<<<<<<< HEAD
    public function optionLabel($row): string {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function optionLabel($row): string
    {
>>>>>>> 42ca46e (up)
=======
    public function optionLabel($row): string {
>>>>>>> afa2edf (Lint)
        $name = $row->name;
        // if (is_string($name)) {
<<<<<<< HEAD
        //    return $name;
        // }
        if (is_array($name)) {
            $name = implode('-', $name);
        }

        return $name;
=======
        return ''.$row->name;
>>>>>>> a780d70 (up)
=======
        return (string)$row->name;
>>>>>>> 27d1a3f (up)
=======
        return (string) $row->name;
>>>>>>> 5a12252 (Lint)
=======
        $name=$row->name;
        if(is_string($name)){
=======
        $name = $row->name;
<<<<<<< HEAD
        if (is_string($name)) {
>>>>>>> eab47b7 (Lint)
            return $name;
        }
=======
        //if (is_string($name)) {
        //    return $name;
       //}
>>>>>>> 1172c16 (up)
=======
        //    return $name;
        // }
>>>>>>> 7333c06 (Lint)
        if (is_array($name)) {
            $name = implode('-', $name);
        }

<<<<<<< HEAD
        return '--';
>>>>>>> a0663a2 (up)
=======
        return $name;
>>>>>>> 1172c16 (up)
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return array
     */
<<<<<<< HEAD
    public function optionsSelect() {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $rows = $this->row->all();

        $rows = Category::get();
=======
        //$rows = $this->row->all();
        $rows=Category::all();
>>>>>>> 27d1a3f (up)
=======
        // $rows = $this->row->all();
        $rows = Category::all();
>>>>>>> 5a12252 (Lint)
=======
        //$rows = $this->row->all();
        /**
         * @var Category[]
         */
        $rows=Category::all();
>>>>>>> a0663a2 (up)
=======
        // $rows = $this->row->all();
        /**
         * @var Category[]
         */
        $rows = Category::all();
>>>>>>> eab47b7 (Lint)
=======
    public function optionsSelect():array {
=======
    public function optionsSelect(): array {
>>>>>>> 7333c06 (Lint)
        // $rows = $this->row->all();
        $rows = Category::get();
>>>>>>> 1172c16 (up)
=======
    /**
     * @return array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function optionsSelect() {
<<<<<<< HEAD
        //$rows = $this->row->all();
       
        $rows=Category::get();
>>>>>>> 3e9d516 (.)
=======
=======
    public function optionsSelect()
    {
>>>>>>> 42ca46e (up)
=======
    public function optionsSelect() {
>>>>>>> afa2edf (Lint)
        // $rows = $this->row->all();

        $rows = Category::get();
>>>>>>> b92546f (Lint)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
        
>>>>>>> 1172c16 (up)
=======
>>>>>>> 7333c06 (Lint)
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
