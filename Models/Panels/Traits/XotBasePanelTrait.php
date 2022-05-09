<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Traits;

////use Laravel\Scout\Searchable;

//----- models------

//---- services -----

//------ traits ---

/**
 * Trait XotBasePanelTrait.
 */
trait XotBasePanelTrait {
    /**
     * @return object[]
     */
    public function seoFields(): array {
        return [
            (object) [
                'type' => 'String',
                'name' => 'post.guid',
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'post.meta_description',
                'col_size' => 6,
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'post.meta_keywords',
                'col_size' => 6,
            ],
        ];
    }

    //end seofields
}//end trait
