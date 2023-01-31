<?php

declare(strict_types=1);

namespace Modules\Blog\View\Components\Card;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use Modules\Cms\Services\PanelService;

<<<<<<< HEAD
class Event extends Component {
=======
/**
 * Class Event.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Event extends Component
{
>>>>>>> 71f0636 (up)
=======
class Event extends Component {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e0d1f4b (Lint)
=======
class Event extends Component
{
>>>>>>> de5af69 (up)
=======
class Event extends Component {
>>>>>>> c24d571 (Lint)
=======
<<<<<<< HEAD
>>>>>>> d01bfa1 (rebase)
=======
<<<<<<< HEAD
>>>>>>> a18c913 (rebase)
=======
=======
>>>>>>> aef633b (rebase)
class Event extends Component {
<<<<<<< HEAD
<<<<<<< HEAD
=======
class Event extends Component
{
>>>>>>> aff4d2d (rebase)
<<<<<<< HEAD
>>>>>>> 6fec78e (rebase)
=======
=======
class Event extends Component {
>>>>>>> f0ffa9e (rebase)
>>>>>>> aef633b (rebase)
    public array $attrs = [];
=======
    public array $attrs=[];
>>>>>>> 071b412 (up)
=======
    public array $attrs = [];
>>>>>>> 7ae4511 (Lint)
    public Model $row;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Model $row, ?string $class = '', ?string $style = '', ?string $id = '') {
        $this->attrs['class'] = $class;
        $this->attrs['style'] = $style;
        $this->attrs['id'] = $id;
        $this->row = $row;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): Renderable {
        /**
         * @phpstan-var view-string
         */
        $view = 'blog::components.card.event';

        $view_params = [
            'view' => $view,
            'panel' => PanelService::make()->get($this->row),
        ];

        return view($view, $view_params);
    }
}
