<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

//------services---------
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\Factories\PlaceFactory;
use Modules\Xot\Services\ImportService;

//------ models --------

class Place extends BaseModelLang {
    use HasFactory;
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'post_id', 'post_type',
        //---- address_components----
        'premise', 'locality', 'postal_town',
        'administrative_area_level_3', 'administrative_area_level_2',  'administrative_area_level_1',
        'country',
        'street_number', 'route', 'postal_code',
        'googleplace_url',
        'point_of_interest', 'political', 'campground',
        //-----
        'latitude', 'longitude', 'formatted_address', 'nearest_street',
    ];

    /**
     * @var string[]
     */
    public static array $address_components = [
        'premise', 'locality', 'postal_town',
        'administrative_area_level_3', 'administrative_area_level_2',  'administrative_area_level_1',
        'country',
        'street_number', 'route', 'postal_code',
        'googleplace_url',
        'point_of_interest', 'political', 'campground',
    ];

    /**
     * @var string[]
     */
    protected $appends = ['value'];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory() {
        return PlaceFactory::new();
    }

    //----- mutators -----

    /**
     * @throws \Exception
     */
    /*
    public function setFormattedAddressAttribute(string $value): void {
        if (isset($this->attributes['formatted_address'])) {
            $address = $this->attributes['formatted_address'];
        } else {
            $address = $value;
            $this->attributes['formatted_address'] = $value;
        }
        if ('' != $address) {
            $tmp = ImportService::getAddressFields(['address' => $address]);
            if (! is_array($tmp)) {
                throw new Exception('tmp is not an array');
            }
            $this->attributes = array_merge($this->attributes, $tmp);
            //ddd($this->attributes);
        }
    }
    */

    /**
     * @param mixed $value
     *
     * @return string
     */
    public function getValueAttribute($value) {
        return $this->route.', '.$this->street_number.', '.$this->locality.', '.$this->administrative_area_level_2.', '.$this->country;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function linked() {
        return $this->morphTo('post');
    }
}