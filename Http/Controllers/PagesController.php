<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> 9225dd6 (up)
/**
 *
 */

<<<<<<< HEAD
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
>>>>>>> eed9a9f (first)
=======
=======
>>>>>>> 7936983 (up)
/**
 *
 */
<<<<<<< HEAD
>>>>>>> 9bcf56c (.)
=======
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
=======

>>>>>>> 9f39ec2 (first)
=======

>>>>>>> ffb8c7b (first)
=======

>>>>>>> 5bff340 (first)
=======

>>>>>>> eed9a9f (first)
declare(strict_types=1);

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Xot\Services\PanelService;
<<<<<<< HEAD
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
use Modules\Xot\Services\PanelService;
>>>>>>> eed9a9f (first)

/**
 * Undocumented class.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
class PagesController extends Controller {
>>>>>>> eed9a9f (first)
=======
class PagesController extends Controller
{
>>>>>>> 9225dd6 (up)
=======
class PagesController extends Controller {
>>>>>>> 9f39ec2 (first)
=======
class PagesController extends Controller {
>>>>>>> ffb8c7b (first)
=======
class PagesController extends Controller {
>>>>>>> 5bff340 (first)
=======
class PagesController extends Controller {
>>>>>>> eed9a9f (first)
    /**
     * Undocumented function.
     *
     * @return void
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
<<<<<<< HEAD
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
=======
    public function show() {
        [$containers,$items] = params2ContainerItem();
        $last_item = last($items);
=======
>>>>>>> 7936983 (up)
        $_panel = PanelService::make()->getRequestPanel();

        //$_panel = PanelService::make()->get(xotModel('page'));
        $row = $_panel->row;

        $view = $row->ns.'::pages.'.$row->guid;
=======
    public function show() {
        [$containers,$items] = params2ContainerItem();
        $last_item = last($items);

        $_panel = PanelService::make()->get(xotModel('page'));
        $view = 'pub_theme::pages.'.$last_item;
>>>>>>> eed9a9f (first)
        $view_params = [
            'view' => $view,
            'lang' => app()->getLocale(),
            '_panel' => $_panel,
<<<<<<< HEAD
>>>>>>> eed9a9f (first)
        ];
        if(!view()->exists($view)){
            dddx([
                'err'=>'view not exists',
                'view'=>$view,
                'row'=>$row,
            ]);
        }
=======
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9225dd6 (up)

        return view()->make($view, $view_params);
    }
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
}
<<<<<<< HEAD
=======
}
>>>>>>> eed9a9f (first)
=======
}
>>>>>>> e302e92 (.)
=======
}
>>>>>>> 9bcf56c (.)
=======
>>>>>>> 7936983 (up)
=======
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)

        return view()->make($view, $view_params);
    }
}
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
        ];

        return view()->make($view, $view_params);
    }
}
>>>>>>> eed9a9f (first)
