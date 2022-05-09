<?php

/**
 *
 */

declare(strict_types=1);

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * Undocumented class.
 */
class PagesController extends Controller
{
    /**
     * Undocumented function.
     *
     * @return void
     */
    public function show()
    {
        [$containers, $items] = params2ContainerItem();
        $last_item = last($items);
        $view = 'pub_theme::pages.' . $last_item;
        $view_params = [
            'view' => $view,
            'lang' => app()->getLocale(),
        ];

        return view()->make($view, $view_params);
    }
}
