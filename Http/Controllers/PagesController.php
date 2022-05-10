<?php

declare(strict_types=1);

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Xot\Services\PanelService;

/**
 * Undocumented class.
 */
class PagesController extends Controller {
    /**
     * Undocumented function.
     *
     * @return void
     */
    public function show() {
        [$containers, $items] = params2ContainerItem();
        $last_item = last($items);
        $view = 'pub_theme::pages.'.$last_item;
        $_panel = PanelService::make()->getRequestPanel();
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
