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
=======
=======
    public function optionLabel($row): string
    {
>>>>>>> 42ca46e (up)
<<<<<<< HEAD
>>>>>>> aff4d2d (rebase)
=======
=======
    public function optionLabel($row): string {
>>>>>>> afa2edf (Lint)
>>>>>>> f0ffa9e (rebase)
=======
>>>>>>> 914e6a9 (rebase)
=======
>>>>>>> f031549 (rebase)
=======
>>>>>>> d0b387a (rebase)
=======
>>>>>>> 1545477 (rebase)
=======
>>>>>>> adca127 (rebase)
=======
=======
>>>>>>> a3494d5 (rebase)
>>>>>>> c41b2a8 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c41b2a8 (rebase)
>>>>>>> b022d6c (up)
=======
        return (string)$row->name;
>>>>>>> 883dd21 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
        return (string) $row->name;
>>>>>>> 056bec8 (Lint)
=======
        $name=$row->name;
        if(is_string($name)){
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 89d9d7e (rebase)
=======
=======
        return $name;
>>>>>>> 1172c16 (up)
>>>>>>> 37f274f (rebase)
=======
>>>>>>> b022d6c (up)
>>>>>>> 914e6a9 (rebase)
=======
>>>>>>> f031549 (rebase)
=======
=======
        return (string) $row->name;
>>>>>>> 056bec8 (Lint)
>>>>>>> d0b387a (rebase)
=======
=======
=======
        $name = $row->name;
<<<<<<< HEAD
        if (is_string($name)) {
>>>>>>> 92e5287 (Lint)
>>>>>>> adca127 (rebase)
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
<<<<<<< HEAD
>>>>>>> 1545477 (rebase)
=======
=======
        return $name;
>>>>>>> ea58237 (up)
>>>>>>> 1fdd40b (rebase)
=======
>>>>>>> a3494d5 (rebase)
>>>>>>> c41b2a8 (rebase)
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> c5a3a82 (rebase)
=======
>>>>>>> 494362e (rebase)
=======
>>>>>>> 2028365 (rebase)
=======
>>>>>>> 2e66bb4 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d0b387a (rebase)
=======
>>>>>>> 1545477 (rebase)
=======
>>>>>>> adca127 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 1545477 (rebase)
=======
        //$rows = $this->row->all();
        /**
         * @var Category[]
         */
        $rows=Category::all();
>>>>>>> dde14f6 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> adca127 (rebase)
=======
        // $rows = $this->row->all();
        /**
         * @var Category[]
         */
        $rows = Category::all();
>>>>>>> 92e5287 (Lint)
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2e66bb4 (rebase)
=======
>>>>>>> 9408b25 (rebase)
        //$rows = $this->row->all();
       
        $rows=Category::get();
>>>>>>> 5c60665 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9408b25 (rebase)
=======
        // $rows = $this->row->all();

        $rows = Category::get();
>>>>>>> 26439f4 (Lint)
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> 20e02a4 (rebase)
=======
=======
    public function optionsSelect():array {
=======
    public function optionsSelect(): array {
>>>>>>> 7333c06 (Lint)
        // $rows = $this->row->all();
        $rows = Category::get();
>>>>>>> 1172c16 (up)
<<<<<<< HEAD
>>>>>>> 37f274f (rebase)
=======
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
<<<<<<< HEAD
>>>>>>> 494362e (rebase)
=======
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
>>>>>>> 3c5dfb1 (rebase)
=======
        // $rows = $this->row->all();

        $rows = Category::get();
=======
        //$rows = $this->row->all();
        $rows=Category::all();
>>>>>>> 883dd21 (up)
>>>>>>> f031549 (rebase)
=======
>>>>>>> d0b387a (rebase)
=======
>>>>>>> 1545477 (rebase)
=======
>>>>>>> adca127 (rebase)
=======
=======
    public function optionsSelect():array {
=======
    public function optionsSelect(): array {
>>>>>>> 209739c (Lint)
        // $rows = $this->row->all();
        $rows = Category::get();
>>>>>>> ea58237 (up)
>>>>>>> 1fdd40b (rebase)
=======
>>>>>>> 2e66bb4 (rebase)
=======
>>>>>>> 9408b25 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2028365 (rebase)
=======
        
>>>>>>> ea58237 (up)
=======
>>>>>>> 209739c (Lint)
<<<<<<< HEAD
=======
=======
        
>>>>>>> 1172c16 (up)
>>>>>>> 37f274f (rebase)
=======
=======
        
>>>>>>> 1172c16 (up)
=======
>>>>>>> 7333c06 (Lint)
>>>>>>> c5a3a82 (rebase)
=======
=======
        
>>>>>>> ea58237 (up)
>>>>>>> 1fdd40b (rebase)
=======
>>>>>>> 2028365 (rebase)
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
