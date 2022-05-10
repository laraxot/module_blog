<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
/**
 *
 */

=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
declare(strict_types=1);

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;

/**
 * Undocumented class.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
class PagesController extends Controller
{
=======
class PagesController extends Controller {
>>>>>>> 9f39ec2 (first)
=======
class PagesController extends Controller {
>>>>>>> ffb8c7b (first)
=======
class PagesController extends Controller {
>>>>>>> 5bff340 (first)
    /**
     * Undocumented function.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function show()
    {
        [$containers, $items] = params2ContainerItem();
        $last_item = last($items);
        $view = 'pub_theme::pages.' . $last_item;
=======
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
    public function show() {
        [$containers,$items] = params2ContainerItem();
        $last_item = last($items);
        $view = 'pub_theme::pages.'.$last_item;
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
        $view_params = [
            'view' => $view,
            'lang' => app()->getLocale(),
        ];

        return view()->make($view, $view_params);
    }
}
