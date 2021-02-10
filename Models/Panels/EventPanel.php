<?php

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class EventPanel
 * @package Modules\Blog\Models\Panels
 */
class EventPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Blog\Models\Event';


    /**
     * Get the fields displayed by the resource.
     *
     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_bs_size' => 2,
            ],
            (object) [
                //'type' => 'DateTime2Fields',
                'type' => 'DateTime',
                'name' => 'date_start',
                'col_bs_size' => 5,
            ],
            (object) [
                'type' => 'DateTime',
                'name' => 'date_end',
                'col_bs_size' => 5,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'title',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'subtitle',
            ],
            (object) [
                'type' => 'Text', //'Html5UploadImg',
                'name' => 'image_src',
                'col_bs_size' => 6,
                'except' => ['index'],
            ],
        ];
    }


}
