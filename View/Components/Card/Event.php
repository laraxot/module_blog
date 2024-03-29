<?php

declare(strict_types=1);

namespace Modules\Blog\View\Components\Card;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use Modules\Cms\Actions\GetViewAction;
use Modules\Cms\Services\PanelService;

class Event extends Component
{
    public array $attrs = [];
    public Model $row;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Model $row, ?string $class = '', ?string $style = '', ?string $id = '')
    {
        $this->attrs['class'] = $class;
        $this->attrs['style'] = $style;
        $this->attrs['id'] = $id;
        $this->row = $row;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        // $view = 'blog::components.card.event';
        $view = app(GetViewAction::class)->execute();

        $view_params = [
            'view' => $view,
            'panel' => PanelService::make()->get($this->row),
        ];

        return view($view, $view_params);
    }
}
