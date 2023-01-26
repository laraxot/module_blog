<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Contracts\Support\Renderable;
=======
use Exception;
>>>>>>> b96306f (up)
=======
use Illuminate\Contracts\Support\Renderable;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
>>>>>>> 1daf8a3 (Lint)
=======
>>>>>>> c029664 (.)
use Illuminate\Support\Arr;
use Modules\Blog\Models\Page;
use Modules\Blog\Models\Panels\Traits\XotBasePanelTrait;
use Modules\Cms\Models\Panels\XotBasePanel;

// ---- bases --

/**
 * Class PagePanel.
 */
class PagePanel extends XotBasePanel {
    use XotBasePanelTrait;
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Page';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    protected static array $search = [];

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return string[]
     */
    public function with(): array {
        return ['post'];
    }

    /**
     * on select the option id.
     *
     * @param mixed $row
     */

    /**
     * on select the option label.
     *
     * @param Page $row
     */
    public function optionLabel($row): string {
        return (string) $row->title;
    }

    /**
     * index navigation.
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function indexNav(): ?Renderable {
=======
    public function indexNav(): ?Renderable
    {
>>>>>>> c029664 (.)
=======
    public function indexNav(): ?Renderable {
>>>>>>> 9a30267 (Lint)
=======
    public function indexNav(): ?Renderable
    {
>>>>>>> 42ca46e (up)
=======
    public function indexNav(): ?Renderable {
>>>>>>> afa2edf (Lint)
        dddx('qui');
        [$containers, $items] = params2ContainerItem();
        $last_item = last($items);
        if (! inAdmin()) {
            // siccome non so dove metterlo, per ora dentro pub_theme
            /**
             * @phpstan-var view-string
             */
            $view = 'pub_theme::pages.'.$last_item.'.index.nav';

            return view()->make($view);
        }

        return null;
    }

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_size' => 6,
            ],

            /*
            (object) [
                'type' => 'SelectParent',
                // 'sub_type' => 'Parent',
                // 'name' => 'post[subtitle]'
                'name' => 'parent_id',
                'col_size' => 6,
            ],
            */

            (object) [
                'type' => 'Integer',
                'name' => 'pos',
                'col_size' => 6,
                // 'rules'=>'unique'
            ],

            (object) [
                'type' => 'String',
                'name' => 'icon',
                'col_size' => 6,
                // 'rules'=>'unique'
            ],

            (object) [
                'type' => 'Text',
                // 'name' => 'post[title]',
                'name' => 'post.title',
                'col_size' => 12,
            ],
            (object) [
                'type' => 'UploadImage',
                // 'name' => 'post[title]',
                'name' => 'post.image_src',
                'col_size' => 12,
            ],
            // */
            (object) [
                'type' => 'Textarea',
                // 'name' => 'post[subtitle]'
                'name' => 'post.subtitle',
                'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'String',
                // 'name' => 'post[subtitle]'
                'name' => 'blade',
                // 'except' => ['index'],
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Checkbox',
                // 'name' => 'post[subtitle]'
                'name' => 'is_modal',
                // 'except' => ['index'],
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Integer',
                // 'name' => 'post[subtitle]'
                'name' => 'status',
                // 'except' => ['index'],
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Wysiwyg',
                // 'type' => 'Textarea',
                'name' => 'post.txt',
                'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'CellCollapse',
                // 'type' => 'Textarea',
                'name' => 'Seo',
                'fields' => $this->seoFields(),
                'col_size' => 12,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [
            new Actions\SendMsgAction(),
        ];
    }

    // temporaneo perchè altrimenti mi da /it/pages/0
    public function url(string $act = 'show', array $params = []): string {
        $url = $this->route->{__FUNCTION__}($act);

        if ([] !== $params) {
            $url_components = parse_url($url);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            if (! isset($url_components['path'])) {
                throw new \Exception('['.__LINE__.']['.__FILE__.']');
=======
            if(!isset($url_components['path'])){
                throw new Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> b96306f (up)
=======
            if (! isset($url_components['path'])) {
                throw new \Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> 1daf8a3 (Lint)
=======
            if (!isset($url_components['path'])) {
                throw new \Exception('[' . __LINE__ . '][' . __FILE__ . ']');
>>>>>>> c029664 (.)
=======
            if (! isset($url_components['path'])) {
                throw new \Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> 9a30267 (Lint)
            }
            $url = $url_components['path'];

            $merged = $params;
            if (isset($url_components['query'])) {
                parse_str($url_components['query'], $originalParams);
                $merged = array_replace_recursive($originalParams, $params);
            }

            $url .= '?'.Arr::query($merged);
        }

        return $url;
    }
}
