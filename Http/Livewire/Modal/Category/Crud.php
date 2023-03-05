<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Modal\Category;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Actions\AddCategoryByModelClassAction;
use Modules\Blog\Actions\GetCategoryByModelTypeAction;
use Modules\Blog\Actions\GetCategoryOptionsByModelTypeAction;
use Modules\Cms\Actions\GetViewAction;
use WireElements\Pro\Components\Modal\Modal;
use WireElements\Pro\Concerns\InteractsWithConfirmationModal;

class Crud extends Modal {
    use InteractsWithConfirmationModal;

    public string $tpl;
    public string $model_type;
    // public string $name;
    public array $form_data = [];
    public string $model_class;
    // public array $options = [];
    // public array $selectedTasks = [];
    // public array $selectedOptions = [];
    // public array $values = [];

    // /**
    //  * @var mixed
    //  */
    // public $value;

    // public Model $model;

    // public string $model_type;

    /**
     * @param mixed $value
     */
    public function mount(string $model_type, string $tpl = 'v1'): void {
        $this->tpl = $tpl;
        $this->model_type = $model_type;
        $this->model_class = collect(config('morph_map'))->get($model_type);
    }

    public static function getName() {
        return 'modal.category.crud';
    }

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);

        $view_params = [
            'view' => $view,
            // 'categories' => app(GetCategoryOptionsByModelTypeAction::class)->execute($this->model_type),
            'categories' => app(GetCategoryByModelTypeAction::class)->execute($this->model_type),
        ];

        return view($view, $view_params);
    }

    public static function behavior(): array {
        return [
            // Close the modal if the escape key is pressed
            'close-on-escape' => false,
            // Close the modal if someone clicks outside the modal
            'close-on-backdrop-click' => false,
            // Trap the users focus inside the modal (e.g. input autofocus and going back and forth between input fields)
            'trap-focus' => true,
            // Remove all unsaved changes once someone closes the modal
            'remove-state-on-close' => false,
        ];
    }

    public static function attributes(): array {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => 'xl',
        ];
    }

    public function add(): void {
        app(AddCategoryByModelClassAction::class)->execute($this->form_data['name'], $this->model_class);
        session()->flash('message', 'Category successfully updated.');
    }

    public function sub(string $id): void {
        $this->askForConfirmation(
            callback: function () use ($id) {
                $tmp = app($this->model_class)->make();
                $tmp->id = 0;
                $tmp->categories()->detach($id);
                session()->flash('message', 'Category successfully deleted.');
            },
        );
    }
}
