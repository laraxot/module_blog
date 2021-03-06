<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Blog\Rules\PivotRequiredRule;
//-------- rules ---
use Modules\Blog\Rules\PrivacyCheckRule;
use Modules\Xot\Models\Panels\XotBasePanel;

//----- bases ---------

/*
Validator::extendImplicit()
*/

/**
 * Class PrivacyMorphPanel.
 */
class PrivacyMorphPanel extends XotBasePanel {
    protected static string $model = 'Modules\Blog\Models\PrivacyMorph';

    protected static string $title = 'title';

    protected static array $search = [];

    public function with(): array {
        return [];
    }

    /**
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->area_id;
    }

    public function optionLabel(object $row): string {
        return $row->area_define_name;
    }

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Hidden',
                'name' => 'title',
                'rules' => 'required',
            ],
            (object) [
                'type' => 'Hidden',
                'name' => 'obligatory',
                'rules' => ['boolean', 'nullable'], //,new PivotRequiredRule('privacy.obligatory','value')],

                //'rules' => 'required_if:payment_type,cc',
                /*
                accepted
The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service" acceptance.
                */
            ],
            (object) [
                'type' => 'BooleanAccept',
                'name' => 'value',
                'rules' => ['boolean', 'nullable', new PrivacyCheckRule('value', 'obligatory')],
                //'attributes'=>['label' => 'label test'],
                //'attributes'=>['label'=>'test label' ],
                //'rules' => 'required_if:payment_type,cc',
                /*
                accepted
The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service" acceptance.
                */
            ],
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = [];

        return [];
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request) {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(Request $request = null) {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request) {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [];
    }
}
