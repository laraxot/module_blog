<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Modal\Category;

use Illuminate\Contracts\Support\Renderable;
use Modules\Blog\Actions\AddCategoryByModelClassAction;
use Modules\Blog\Actions\GetCategoryByModelTypeAction;
use Modules\Blog\Models\Category;
use Modules\Cms\Actions\GetViewAction;
use Modules\UI\Services\ThemeService;
use Modules\Wire\Concerns\InteractsWithConfirmationModal;
use Modules\Wire\View\Components\Modal\Modal;
use Modules\Xot\Actions\GetModelClassByModelTypeAction;

class Crud extends Modal
{
    use InteractsWithConfirmationModal;

    public string $tpl;
    public string $model_type;
    public array $form_data = [];
    public string $model_class;

    public function mount(string $model_type, string $tpl = 'v1'): void
    {
        $this->tpl = $tpl;
        $this->model_type = $model_type;
        $this->model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);
        // ThemeService::add('https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js');
    }

    public static function getName(): string
    {
        return 'modal.category.crud';
    }

    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);
        $categories = app(GetCategoryByModelTypeAction::class)->execute($this->model_type);

        $view_params = [
            'view' => $view,
            'categories' => $categories,
        ];

        return view($view, $view_params);
    }

    public static function behavior(): array
    {
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

    public static function attributes(): array
    {
        return [
            // Set the modal size to 2xl, you can choose between:
            // xs, sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl
            'size' => '2xl',
        ];
    }

    public function updateOrder(array $list): void
    {
        $order = collect($list)->pluck('value')->all();
        Category::setNewOrder($order);
        $this->emit('refresh');
        session()->flash('message', 'Order successfully updated. '.now());
    }

    public function add(): void
    {
        app(AddCategoryByModelClassAction::class)->execute($this->form_data['name'], $this->model_class);
        session()->flash('message', 'Category successfully updated. '.now());
    }

    public function sub(string $id): void
    {
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
