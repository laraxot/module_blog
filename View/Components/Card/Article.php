<?php

declare(strict_types=1);

namespace Modules\Blog\View\Components\Card;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;
use Modules\Cms\Services\PanelService;

<<<<<<< HEAD
class Article extends Component {
=======
/**
 * Class Article.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class Article extends Component
{
>>>>>>> 71f0636 (up)
=======
class Article extends Component {
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> e0d1f4b (Lint)
=======
class Article extends Component
{
>>>>>>> de5af69 (up)
=======
class Article extends Component {
>>>>>>> c24d571 (Lint)
=======
<<<<<<< HEAD
>>>>>>> d01bfa1 (rebase)
=======
<<<<<<< HEAD
>>>>>>> a18c913 (rebase)
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
        $view = 'blog::components.card.article';
        // dddx($this->row);
        $view_params = [
            'view' => $view,
            'panel' => PanelService::make()->get($this->row),
        ];

        return view($view, $view_params);
    }
}
