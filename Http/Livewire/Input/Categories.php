<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Input;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Modules\Blog\Models\Category;

class Categories extends Component {
    public string $tpl = 'v1';
    public string $name;
    public array $form_data = [];
    /**
     * @var mixed
     */
    public $value;

    public Model $model;

    /**
     * @param mixed $value
     */
    public function mount(string $name, Model $model, $value, $tpl = 'v1'): void {
        $this->name = $name;
        $this->model = $model;
        $this->value = $value;
        $this->tpl = $tpl;

        $this->showPage();
    }

    public function showPage() {
        $this->availableCategories = $this->getAvailableCategories();
        $this->assignedCategories = $this->getAssignedCategories();
    }

    public function getAvailableCategories() {
        return Category::whereNotIn('id', $this->getAssignedCategoriesKeys())->orderBy('name')->get();
    }

    public function getAssignedCategoriesKeys() {
        return $this->model->categories()->pluck('id')->toArray();
    }

    public function getAssignedCategories() {
        return $this->model->categories()->get()->pluck('id', 'name');
    }

    public function assign() {
        $this->model->categories()->attach($this->form_data['available_cats']);

        $this->showPage();
    }

    public function remove() {
        $this->model->categories()->detach($this->form_data['assigned_cats']);

        $this->showPage();
    }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'blog::livewire.input.categories.'.$this->tpl;

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public static function attributes(): array {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }

    public function save(): void {
    }
}
