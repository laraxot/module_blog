<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions\Favorite;

use Illuminate\Support\Facades\Route;
//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class NoMoreFavoriteAction.
 */
class NoMoreFavoriteAction extends XotBasePanelAction {
    public bool $onContainer = true;

    //public bool $onItem = true; //onlyContainer
    //mettere freccette su e giù

    public string $icon = '<i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i>';

    /**
     * @var int|string|null
     */
    public $auth_user_id = null;

    /**
     * NoMoreFavoriteAction constructor.
     *
     * @param int|string|null $auth_user_id
     */
    public function __construct($auth_user_id) {
        $this->auth_user_id = $auth_user_id;
    }

    /**
     * @return mixed
     */

    //-- Perform the action on the given models.
    public function handle() {
        //dddx($this);
        //return 'ciao';
        //ddd($this->row);
        dddx($this->rows);
    }

    /**
     * @return string
     */
    public function postHandle() {
        //$this->rows->where('auth_user_id', $this->auth_user_id);
        //$route_params = Route::current()->parameters();
        [$containers,$items] = params2ContainerItem();
        $func = 'favorites';
        last($items)->$func()->where('auth_user_id', $this->auth_user_id)->delete();

        return 'fatto';
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions\Favorite;

use Illuminate\Support\Facades\Route;
//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class NoMoreFavoriteAction.
 */
class NoMoreFavoriteAction extends XotBasePanelAction {
    public bool $onContainer = true;

    //public bool $onItem = true; //onlyContainer
    //mettere freccette su e giù

    public string $icon = '<i class="fa fa-arrow-up"></i><i class="fa fa-arrow-down"></i>';

    /**
     * @var int|string|null
     */
    public $auth_user_id = null;

    /**
     * NoMoreFavoriteAction constructor.
     *
     * @param int|string|null $auth_user_id
     */
    public function __construct($auth_user_id) {
        $this->auth_user_id = $auth_user_id;
    }

    /**
     * @return mixed
     */

    //-- Perform the action on the given models.
    public function handle() {
        //dddx($this);
        //return 'ciao';
        //ddd($this->row);
        dddx($this->rows);
    }

    /**
     * @return string
     */
    public function postHandle() {
        //$this->rows->where('auth_user_id', $this->auth_user_id);
        //$route_params = Route::current()->parameters();
        [$containers,$items] = params2ContainerItem();
        $func = 'favorites';
        last($items)->$func()->where('auth_user_id', $this->auth_user_id)->delete();

        return 'fatto';
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
