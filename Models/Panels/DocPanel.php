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
 * Class DocPanel
 * @package Modules\Blog\Models\Panels
 */
class DocPanel extends XotBasePanel {
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static string $model = 'Modules\Blog\Models\Doc';


    /**
     * on select the option label
     * @param object $row
     * @return string
     */

	public function optionLabel(object $row):string{
		return $row->area_define_name;
	}

	/**
	 * Get the fields displayed by the resource.
	 *

	 * @return array

		'col_bs_size' => 6,
		'sortable' => 1,
		'rules' => 'required',
		'rules_messages' => ['it'=>['required'=>'Nome Obbligatorio']],
		'value'=>'..',

	 */




	public function fields(): array{
		return array (
  (object) array(
     'type' => 'Id',
     'name' => 'id',
     'comment' => 'not in Doctrine',
  ),
  (object) array(
     'type' => 'Text',
     'name' => 'pos',
     'comment' => 'not in Doctrine',
  ),
  (object) array(
     'type' => 'Text',
     'name' => 'article_type',
     'comment' => 'not in Doctrine',
  ),
  (object) array(
     'type' => 'Text',
     'name' => 'published_at',
     'comment' => 'not in Doctrine',
  ),
  (object) array(
     'type' => 'Text',
     'name' => 'parent_id',
     'comment' => 'not in Doctrine',
  ),
  (object) array(
     'type' => 'Text',
     'name' => 'parent_type',
     'comment' => 'not in Doctrine',
  ),
  (object) array(
     'type' => 'Text',
     'name' => 'is_featured',
     'comment' => 'not in Doctrine',
  ),
  (object) array(
     'type' => 'Text',
     'name' => 'auth_user_id',
     'comment' => 'not in Doctrine',
  ),
);
	}


    /**
     * Get the actions available for the resource.
     *
     * @param Request|null $request
     * @return array
     */
	public function actions(Request $request=null){
		return [];
	}

}
