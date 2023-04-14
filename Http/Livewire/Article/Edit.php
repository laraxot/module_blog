<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Article;

use Livewire\Component;
use Modules\Blog\Models\Article;
use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Contracts\PanelContract;
use Modules\Xot\Actions\Model\StoreAction;
use Illuminate\Contracts\Support\Renderable;

/**
 * Undocumented Place.
 */
class Edit extends Component
{
    public array $form_data = [];
    public string $tpl;

    public function mount(PanelContract $panel,  string $tpl = 'v1'): void
    {
        $this->tpl = $tpl;
    }

    /**
     * Undocumented function.
     */
    public function render(): Renderable
    {
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
     * @return void
     */
    public function store()
    {
        // dddx($this->form_data);
        $model = app(Article::class);
        $data = $this->form_data;
        $rules = [];
        app(StoreAction::class)->execute($model, $data, $rules);
    }
}
