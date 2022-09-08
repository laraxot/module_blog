<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

use Illuminate\Http\Request;
// --- Services --
use Modules\Blog\Rules\PivotRequiredRule;
// -------- rules ---
use Modules\Blog\Rules\PrivacyCheckRule;
use Modules\Xot\Models\Panels\XotBasePanel;

// ----- bases ---------

/*
Validator::extendImplicit()
*/

/**
 * Class PrivacyMorphPanel.
 */
class PrivacyMorphPanel extends XotBasePanel {
    protected static string $model = 'Modules\Blog\Models\PrivacyMorph';

    protected static string $title = 'title';

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
                'rules' => ['boolean', 'nullable'], // ,new PivotRequiredRule('privacy.obligatory','value')],

                // 'rules' => 'required_if:payment_type,cc',
                /*
                accepted
The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service" acceptance.
                */
            ],
            (object) [
                'type' => 'BooleanAccept',
                'name' => 'value',
                'rules' => ['boolean', 'nullable', new PrivacyCheckRule('value', 'obligatory')],
                // 'attributes'=>['label' => 'label test'],
                // 'attributes'=>['label'=>'test label' ],
                // 'rules' => 'required_if:payment_type,cc',
                /*
                accepted
The field under validation must be yes, on, 1, or true. This is useful for validating "Terms of Service" acceptance.
                */
            ],
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array {
        $tabs_name = [];

        return [];
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(Request $request): array {
        return [];
    }

    /**
     * Get the filters available for the resource.
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    public function lenses(Request $request): array {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [];
    }
}
