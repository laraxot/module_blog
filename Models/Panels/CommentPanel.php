<?php
namespace Modules\Blog\Models\Panels;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

//--- Services --
use Modules\Xot\Services\StubService;
use Modules\Xot\Services\RouteService;


use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class CommentPanel
 * @package Modules\Blog\Models\Panels
 */
class CommentPanel extends XotBasePanel {
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static string $model = 'Modules\Blog\Models\Comment';


    /**
     * @return object[]
     */
    public function fields(): array{
		return array (
			(object) array(
     'type' => 'Id',
     'name' => 'id',
     'comment' => NULL,
  ),


  (object) array(
     'type' => 'Integer',
     'name' => 'post_id',
     'comment' => NULL,
  ),
 (object) array(
     'type' => 'Integer',
     'name' => 'post_type',
     'comment' => NULL,
  ),
  (object) array(
     'type' => 'Textarea',
     'name' => 'txt',
     'comment' => NULL,
  ),

  (object) array(
     'type' => 'Text',
     'name' => 'related_type',
     'comment' => 'not in Doctrine',
  ),
  (object) array(
     'type' => 'Integer',
     'name' => 'auth_user_id',
     'comment' => NULL,
  ),
  (object) [
     'type' => 'Test',
     'name' => 'ratings',
     'comment' => NULL,
  ],
);
	}

}
