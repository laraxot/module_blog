<?php

<<<<<<< HEAD
/**
 *
 */

=======
>>>>>>> 9f39ec2 (first)
declare(strict_types=1);

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * Undocumented class.
 */
<<<<<<< HEAD
class PagesController extends Controller
{
=======
class PagesController extends Controller {
>>>>>>> 9f39ec2 (first)
    /**
     * Undocumented function.
     *
     * @return void
     */
<<<<<<< HEAD
    public function show()
    {
        [$containers, $items] = params2ContainerItem();
        $last_item = last($items);
        $view = 'pub_theme::pages.' . $last_item;
=======
    public function show() {
        [$containers,$items] = params2ContainerItem();
        $last_item = last($items);
        $view = 'pub_theme::pages.'.$last_item;
>>>>>>> 9f39ec2 (first)
        $view_params = [
            'view' => $view,
            'lang' => app()->getLocale(),
        ];

        return view()->make($view, $view_params);
    }
}
