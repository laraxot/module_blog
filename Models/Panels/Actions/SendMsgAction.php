<<<<<<< HEAD
<?php

namespace Modules\Blog\Models\Panels\Actions;

//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;
//use Modules\Theme\Services\ThemeService;


//-------- bases -----------

/**
 * Class SendMsgAction
 * @package Modules\Blog\Models\Panels\Actions
 */
class SendMsgAction extends XotBasePanelAction {

    //public bool $onContainer = false;
    /**
     * @var bool
     */
    public bool $onItem = true; //onlyContainer
    //mettere freccette su e giù
    /**
     * @var string
     */
    public string $icon = '<i class="far fa-paper-plane"></i>';

        /**
    * Perform the action
* @return mixed
     */
    public function handle() {

        return 'invio messaggio';
        //ddd($this->row);
    }
}
=======
<?php

namespace Modules\Blog\Models\Panels\Actions;

//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;
//use Modules\Theme\Services\ThemeService;


//-------- bases -----------

/**
 * Class SendMsgAction
 * @package Modules\Blog\Models\Panels\Actions
 */
class SendMsgAction extends XotBasePanelAction {

    //public bool $onContainer = false;
    /**
     * @var bool
     */
    public bool $onItem = true; //onlyContainer
    //mettere freccette su e giù
    /**
     * @var string
     */
    public string $icon = '<i class="far fa-paper-plane"></i>';

        /**
    * Perform the action
* @return mixed
     */
    public function handle() {

        return 'invio messaggio';
        //ddd($this->row);
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
