<?php

namespace Modules\Blog\Models\Panels\Traits;

//use Laravel\Scout\Searchable;

//----- models------
//use Modules\Blog\Models\Amenity;

//---- services -----


//------ traits ---

/**
 * Trait XotBasePanelTrait
 * @package Modules\Blog\Models\Panels\Traits
 */
trait XotBasePanelTrait
{

    // elenco delle amenities collegati ad un determinato modello collegato (es: ristorante)
    //public function amenities()
    //{
    //    return $this->morphRelated(Amenity::class);
    //}
    /**
     * @return object[]
     */
    public function seoFields(){

        return [
            (object) [
                'type' => 'String',
                'name' => 'post.guid',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'post.meta_description',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'post.meta_keywords',
                'col_bs_size' => 6,
            ],
        ];

    }//end seofields

}//end trait
