<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Livewire\Add;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Cms\Actions\GetViewAction;

/**
 * Undocumented Place.
 */
class Place extends Component {
    public string $tpl;

    public function mount(string $tpl = 'v1'): void {
        $this->tpl = $tpl;
    }

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
}
