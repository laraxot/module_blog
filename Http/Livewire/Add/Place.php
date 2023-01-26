<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Add;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;

/**
 * Undocumented Place.
 */
class Place extends Component
{
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = 'blog::livewire.add.place';

        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }
}
