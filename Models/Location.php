<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

//--------- models --------
//--- services
use Modules\Xot\Services\ImportService;

//--- traits

/**
 * Modules\Blog\Models\Location.
 *
 * @property int                                                                      $post_id
 * @property string|null                                                              $term
 * @property string|null                                                              $location
 * @property string|null                                                              $latitude
 * @property string|null                                                              $longitude
 * @property int|null                                                                 $radius
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property string|null                                                              $locality
 * @property string|null                                                              $locality_short
 * @property string|null                                                              $administrative_area_level_2
 * @property string|null                                                              $administrative_area_level_2_short
 * @property string|null                                                              $administrative_area_level_1
 * @property string|null                                                              $administrative_area_level_1_short
 * @property string|null                                                              $country
 * @property string|null                                                              $country_short
 * @property string|null                                                              $formatted_address
 * @property string|null                                                              $nearest_street
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $premise
 * @property string|null                                                              $postal_town
 * @property string|null                                                              $administrative_area_level_3
 * @property string|null                                                              $street_number
 * @property string|null                                                              $route
 * @property string|null                                                              $postal_code
 * @property string|null                                                              $googleplace_url
 * @property string|null                                                              $point_of_interest
 * @property string|null                                                              $political
 * @property string|null                                                              $campground
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $create_url
 * @property mixed                                                                    $destroy_url
 * @property mixed                                                                    $detach_url
 * @property mixed                                                                    $edit_url
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $index_edit_url
 * @property mixed                                                                    $index_url
 * @property mixed                                                                    $lang
 * @property mixed                                                                    $movedown_url
 * @property mixed                                                                    $moveup_url
 * @property mixed                                                                    $post_type
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $show_url
 * @property mixed                                                                    $subtitle
 * @property mixed                                                                    $title
 * @property mixed                                                                    $txt
 * @property mixed                                                                    $update_url
 * @property mixed                                                                    $url
 * @property mixed                                                                    $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]    $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property int|null                                                                 $my_favorites_count
 * @property \Modules\Blog\Models\Post|null                                           $post
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereNearestStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereRadius($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereTerm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 */
class Location extends BaseModelLang {
    //use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    //https://github.com/staudenmeir/eloquent-has-many-deep#morphedbymany

    /**
     * @var string
     */
    public $table = 'import_items'; //<name pack>_items

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'latitude', 'longitude', 'address1', 'address2',
        'address3', 'city', 'zip_code', 'country', 'state', 'phone', 'display_phone', 'price',
        'is_closed', 'review_count', ];

    //, 'yelp_url', 'rating'
    /*
    public static $food_engines = [
            'justeat', 'sgnamit', 'googleplace', 'foodracers',
            'foodora', 'moovenda', 'deliveroo',
            'bacchetteforchette',
            'theforkit', 'misiedocom',
            'yelp', 'zomato', 'restopolitanit',
            'mymenu', 'foodpanda', 'facebook',
    ];
    */

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

    //-------- relationships ----------------------
    /*
    public function restaurantProviders()
    {
        $rows = $this->hasManyThrough(
            RestaurantProvider::class,
            Restaurant::class,
            'locality', // Foreign key on Restaurant table...
            'post_id', // Foreign key on posts table...
            'locality', // Local key on Location table...
            'post_id' // Local key on Restaurant table...
        );

        return $rows;
    }
    */
    /*
    public function restaurants()
    {
        $related_table = with(new Restaurant())->getTable();
        $post_table = with(new Post())->getTable();

        return $this->hasMany(Restaurant::class, 'locality', 'locality')

            ->join($post_table, $post_table.'.post_id', '=', $related_table.'.post_id')
            ->where($post_table.'.lang', $this->lang)
            ->where($post_table.'.post_type', 'restaurant')

            ->with(['cuisineCats', 'post']);
    }
    */
    /*
    public function cuisineCats()
    {
        $related_table = with(new CuisineCat())->getTable();
        $post_table = with(new Post())->getTable();

        return $this->hasManyDeepFromRelations($this->restaurants(), (new Restaurant())->cuisineCats())

            ->join($post_table, $post_table.'.post_id', '=', $related_table.'.post_id')
            ->where($post_table.'.lang', $this->lang)
            ->where($post_table.'.post_type', 'cuisineCat')
            ->groupBy($post_table.'.guid')

            ->with(['post']);
    }
    */

    //-------- mutators ------
    /*
    public function getFoodEnginesAttribute($value)
    {
        return self::$food_engines;
    }
    */

    public function getImageSrcAttribute(?string $value): ?string {
        if ('' == $value) {
            $ris = ImportService::pixabay(['q' => $this->locality.' '.$this->country]);
            if (\is_object($ris)) {
                $value = $ris->webformatURL;
            }
        }

        return $value;
    }

    /**
     * @param mixed $value
     *
     * @throws \Exception
     *
     * @return mixed|string|null
     */
    public function getUrlAttribute($value) {
        if (! $this->post) {
            $post = Post::query()->firstOrCreate(
                ['guid' => $this->guid, 'type' => $this->post_type, 'lang' => app()->getLocale()],
                ['title' => $this->title]
            );
            $post->title = (string) $this->title;
            $post->save();
            if ($this->post_id != $post->post_id) {
                self::where('post_id', $post->post_id)->delete();
                $this->post_id = (int) $post->post_id;
                $this->save();
            }
            //$this->post = $post;
            return $post->url;
        }

        return $this->post->url;
    }
}
