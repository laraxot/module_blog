<?php

declare(strict_types=1);

namespace Modules\Blog\View\Components\Card;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use Modules\Cms\Services\PanelService;

/**
 * Class Article.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Article extends Component {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
class Article extends Component {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> ea4d650 (rebase)
=======
class Article extends Component
{
>>>>>>> aff4d2d (rebase)
<<<<<<< HEAD
=======
class Article extends Component {
>>>>>>> f0ffa9e (rebase)
=======
>>>>>>> 03e54aa (rebase)
=======
>>>>>>> fd40c94 (rebase)
=======
>>>>>>> ea4d650 (rebase)
    public array $attrs = [];
=======
    public array $attrs=[];
>>>>>>> 071b412 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public array $attrs = [];
>>>>>>> 7ae4511 (Lint)
=======
>>>>>>> 03e54aa (rebase)
=======
=======
    public array $attrs = [];
>>>>>>> 7ae4511 (Lint)
>>>>>>> fd40c94 (rebase)
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
        $view = 'blog::components.card.article';
        // dddx($this->row);
        $view_params = [
            'view' => $view,
            'panel' => PanelService::make()->get($this->row),
        ];

        return view($view, $view_params);
    }
}
