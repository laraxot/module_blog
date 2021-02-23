<<<<<<< HEAD
<?php

namespace Modules\Blog\Models\Panels\Actions;

//-------- models -----------
use Modules\Blog\Models\Post;
//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class DeleteNoPostIdAction
 * @package Modules\Blog\Models\Panels\Actions
 */
class DeleteNoPostIdAction extends XotBasePanelAction {
    /**
     * @var bool
     */
    public bool $onContainer = true;

    /**
     * @var string
     */
    public string $icon = '<i class="fas fa-heart-broken"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        $rows = Post::whereNull('post_id')->delete();

        return '<h3>+Fatto</h3>';
    }

    //end handle
}
=======
<?php

namespace Modules\Blog\Models\Panels\Actions;

//-------- models -----------
use Modules\Blog\Models\Post;
//-------- services --------
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class DeleteNoPostIdAction
 * @package Modules\Blog\Models\Panels\Actions
 */
class DeleteNoPostIdAction extends XotBasePanelAction {
    /**
     * @var bool
     */
    public bool $onContainer = true;

    /**
     * @var string
     */
    public string $icon = '<i class="fas fa-heart-broken"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        $rows = Post::whereNull('post_id')->delete();

        return '<h3>+Fatto</h3>';
    }

    //end handle
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
