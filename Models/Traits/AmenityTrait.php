<<<<<<< HEAD
<?php

namespace Modules\Blog\Models\Traits;

//use Laravel\Scout\Searchable;

//----- models------
use Modules\Blog\Models\Amenity;

//---- services -----
//use Modules\Xot\Services\PanelService as Panel;

//------ traits ---

/**
 * Trait AmenityTrait
 * @package Modules\Blog\Models\Traits
 */
trait AmenityTrait {
    // elenco delle amenities collegati ad un determinato modello collegato (es: ristorante)
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function amenities() {
        return $this->morphRelated(Amenity::class);
    }

    // elenco delle amenities totali (non collegate a nessuna istanza di modello collegato)

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function amenityObjectives() {
        return $this->hasMany(Amenity::class, 'related_type', 'post_type');
    }
}
=======
<?php

namespace Modules\Blog\Models\Traits;

//use Laravel\Scout\Searchable;

//----- models------
use Modules\Blog\Models\Amenity;

//---- services -----
//use Modules\Xot\Services\PanelService as Panel;

//------ traits ---

/**
 * Trait AmenityTrait
 * @package Modules\Blog\Models\Traits
 */
trait AmenityTrait {
    // elenco delle amenities collegati ad un determinato modello collegato (es: ristorante)
    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function amenities() {
        return $this->morphRelated(Amenity::class);
    }

    // elenco delle amenities totali (non collegate a nessuna istanza di modello collegato)

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function amenityObjectives() {
        return $this->hasMany(Amenity::class, 'related_type', 'post_type');
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
