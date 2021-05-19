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
 * Class ContainerPanel
 * @package Modules\Blog\Models\Panels
 */
class ContainerPanel extends XotBasePanel {
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static string $model = 'Modules\Blog\Models\Container';

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static string $title = "title";

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static array $search = array (
) ;

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return array

     * @var array
     */
	public function with():array{
	  return [];
	}

    /**
     * @return array
     */
    function search() :array {

		return [];
	}

    /**
     * on select the option id
     * @param object $row
     * @return mixed
     */

	public function optionId(object $row){
		return $row->area_id;
	}

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
     'type' => 'Text',
     'name' => 'id',
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
