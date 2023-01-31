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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> a3494d5 (rebase)
=======
>>>>>>> 0088a11 (rebase)
=======
>>>>>>> 962cd73 (rebase)
=======
>>>>>>> 89d9d7e (rebase)
=======
>>>>>>> 20e02a4 (rebase)
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
<<<<<<< HEAD
>>>>>>> b022d6c (up)
=======
        return (string)$row->name;
>>>>>>> 883dd21 (up)
=======
        return (string) $row->name;
>>>>>>> 056bec8 (Lint)
=======
        $name=$row->name;
        if(is_string($name)){
=======
        $name = $row->name;
<<<<<<< HEAD
        if (is_string($name)) {
>>>>>>> 92e5287 (Lint)
            return $name;
        }
=======
        //if (is_string($name)) {
        //    return $name;
       //}
>>>>>>> ea58237 (up)
=======
        //    return $name;
        // }
>>>>>>> 209739c (Lint)
        if (is_array($name)) {
            $name = implode('-', $name);
        }

<<<<<<< HEAD
        return '--';
>>>>>>> dde14f6 (up)
=======
        return $name;
>>>>>>> ea58237 (up)
=======
>>>>>>> a780d70 (up)
<<<<<<< HEAD
>>>>>>> a3494d5 (rebase)
=======
=======
        return (string)$row->name;
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
=======
=======
        return (string) $row->name;
>>>>>>> 5a12252 (Lint)
<<<<<<< HEAD
>>>>>>> 962cd73 (rebase)
=======
=======
        $name=$row->name;
        if(is_string($name)){
=======
        $name = $row->name;
        if (is_string($name)) {
>>>>>>> eab47b7 (Lint)
            return $name;
        }
        if (is_array($name)) {
            return implode('-', $name);
        }

        return '--';
>>>>>>> a0663a2 (up)
>>>>>>> 89d9d7e (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $rows = $this->row->all();

        $rows = Category::get();
=======
        //$rows = $this->row->all();
        $rows=Category::all();
>>>>>>> 883dd21 (up)
=======
        // $rows = $this->row->all();
        $rows = Category::all();
>>>>>>> 056bec8 (Lint)
=======
        //$rows = $this->row->all();
        /**
         * @var Category[]
         */
        $rows=Category::all();
>>>>>>> dde14f6 (up)
=======
        // $rows = $this->row->all();
        /**
         * @var Category[]
         */
        $rows = Category::all();
>>>>>>> 92e5287 (Lint)
=======
    public function optionsSelect():array {
=======
    public function optionsSelect(): array {
>>>>>>> 209739c (Lint)
        // $rows = $this->row->all();
        $rows = Category::get();
>>>>>>> ea58237 (up)
=======
    /**
     * @return array
     */
    public function optionsSelect() {
<<<<<<< HEAD
<<<<<<< HEAD
        //$rows = $this->row->all();
       
        $rows=Category::get();
>>>>>>> 5c60665 (.)
=======
        // $rows = $this->row->all();

        $rows = Category::get();
>>>>>>> 26439f4 (Lint)
=======
=======
>>>>>>> 962cd73 (rebase)
=======
>>>>>>> 89d9d7e (rebase)
=======
>>>>>>> 20e02a4 (rebase)
        // $rows = $this->row->all();

        $rows = Category::get();
=======
        //$rows = $this->row->all();
        $rows=Category::all();
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
=======
=======
        // $rows = $this->row->all();
        $rows = Category::all();
>>>>>>> 5a12252 (Lint)
<<<<<<< HEAD
>>>>>>> 962cd73 (rebase)
=======
=======
        //$rows = $this->row->all();
        /**
         * @var Category[]
         */
        $rows=Category::all();
>>>>>>> a0663a2 (up)
<<<<<<< HEAD
>>>>>>> 89d9d7e (rebase)
=======
=======
        // $rows = $this->row->all();
        /**
         * @var Category[]
         */
        $rows = Category::all();
>>>>>>> eab47b7 (Lint)
>>>>>>> 20e02a4 (rebase)
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
        
>>>>>>> ea58237 (up)
=======
>>>>>>> 209739c (Lint)
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
