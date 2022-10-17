<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Article;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

/**
 * Undocumented Place.
 */
class Create extends Component {

    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'blog::livewire.article.create';

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
