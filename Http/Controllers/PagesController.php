<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Controllers;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Blog\Models\Page;
use Modules\Xot\Services\PanelService;

/**
 * Undocumented class.
 */
class PagesController extends Controller {
    /**
     * Undocumented function.
     */
    public function show(): Renderable {
        [$containers, $items] = params2ContainerItem();
        $last_item = last($items);
        /**
         * @phpstan-var view-string
         */
        $view = 'pub_theme::pages.'.$last_item;
        $_panel = PanelService::make()->getRequestPanel();
        if (null === $_panel) {
            throw new Exception('['.__LINE__.']['.__FILE__.']');
        }
        /**
         * @var Page
         */
        $row = $_panel->row;

        $view = $row->ns.'::pages.'.$row->guid;

        $view_params = [
            'view' => $view,
            'lang' => app()->getLocale(),
            '_panel' => $_panel,
        ];
        if (! view()->exists($view)) {
            dddx([
                'err' => 'view not exists',
                'view' => $view,
                'row' => $row,
            ]);
        }

        return view()->make($view, $view_params);
    }
}
