<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Input;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Blog\Actions\GetCategoryOptionsByModelAction;
use Modules\Blog\Models\Category;
use Modules\Cms\Actions\GetViewAction;

class Categories extends Component {
    public string $tpl;
    public string $name;
    public array $form_data = [];
    public array $options = [];
    public array $selectedTasks = [];
    public array $selectedOptions = [];
    public array $values = [];

    /**
     * @var mixed
     */
    public $value;

    public Model $model;

    public string $model_type;

    public function mount(string $name, Model $model, $value, string $tpl = 'v1'): void {
        $this->name = $name;
        $this->model = $model;
        $this->model_type = Str::snake(class_basename($model));
        $this->value = $value;
        $this->tpl = $tpl;
        $this->options = app(GetCategoryOptionsByModelAction::class)->execute($model);
        if (null != $value && is_object($value) && method_exists($value, 'pluck')) {
            $this->values = $value->pluck('id')->all();
        }
        // $this->values = $value->pluck('id')->all();
    }

    public function setValues(array $values): void {
        $this->values = $values;
    }
    /*
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
        if (\is_iterable($this->form_data['available_cats'])) {
            $this->model->categories()->attach($this->form_data['available_cats']);
        }
        $this->showPage();
    }

    public function remove() {
        $this->model->categories()->detach($this->form_data['assigned_cats']);

        $this->showPage();
    }
    */

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    /**
     * Undocumented function.
     *
     * @param string|int|array|null $value
     *
     * @return void
     */
    public function selectedOptions($value) {
        $value = Arr::wrap($value);
        $this->selectedOptions = $value;
    }

    /*
    public static function attributes(): array {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }


    public function save(): void {
    }
    */
}
