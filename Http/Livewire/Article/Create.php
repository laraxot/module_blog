<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Article;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Blog\Models\Article;
use Modules\Xot\Actions\Model\StoreAction;

/**
 * Undocumented Place.
 */
class Create extends Component
{
    public array $form_data = [];

    /**
     * Undocumented function.
     */
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'blog::livewire.article.create';

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
