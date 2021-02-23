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
 * Class EventMorphPanel
 * @package Modules\Blog\Models\Panels
 */
class EventMorphPanel extends XotBasePanel {
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static string $model = 'Modules\Blog\Models\EventMorph';


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
     'type' => 'BigInt',
     'name' => 'post_id',
     'comment' => NULL,
  ),
  (object) array(
     'type' => 'String',
     'name' => 'post_type',
     'comment' => NULL,
  ),
  (object) array(
     'type' => 'BigInt',
     'name' => 'event_id',
     'comment' => NULL,
  ),
  (object) array(
     'type' => 'String',
     'name' => 'related_type',
     'comment' => NULL,
  ),
  (object) array(
     'type' => 'Integer',
     'name' => 'auth_user_id',
     'comment' => NULL,
  ),
);
	}



	/**
	 * Get the actions available for the resource.
	 *

	 * @return array
	 */
	public function actions(){
		return [];
	}

}
