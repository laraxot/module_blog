<?php
<<<<<<< HEAD
<<<<<<< HEAD

<<<<<<< HEAD
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
declare(strict_types=1);

namespace Modules\Blog\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Xot\Services\PanelService;
<<<<<<< HEAD
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)

/**
 * Undocumented class.
 */
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
    /**
     * Undocumented function.
     *
     * @return void
     */
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
        $view_params = [
            'view' => $view,
            'lang' => app()->getLocale(),
            '_panel' => $_panel,
>>>>>>> eed9a9f (first)
        ];
        if(!view()->exists($view)){
            dddx([
                'err'=>'view not exists',
                'view'=>$view,
                'row'=>$row,
            ]);
        }

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
