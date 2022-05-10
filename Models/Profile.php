<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

//--------- models --------

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Geo\Models\Traits\GeoTrait;
//--- TRAITS ---
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\User;
use Modules\Xot\Models\Traits\WidgetTrait;

//--- services
//--- bases
//use Modules\Xot\Models\XotBaseModel;

/**
 * Modules\Blog\Models\Profile.
 *
 * @property int                                                                      $id
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $deleted_by
 * @property string|null                                                              $deleted_ip
 * @property string|null                                                              $created_ip
 * @property string|null                                                              $updated_ip
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property string|null                                                              $deleted_at
 * @property string|null                                                              $premise
 * @property string|null                                                              $premise_short
 * @property string|null                                                              $locality
 * @property string|null                                                              $locality_short
 * @property string|null                                                              $postal_town
 * @property string|null                                                              $postal_town_short
 * @property string|null                                                              $administrative_area_level_3
 * @property string|null                                                              $administrative_area_level_3_short
 * @property string|null                                                              $administrative_area_level_2
 * @property string|null                                                              $administrative_area_level_2_short
 * @property string|null                                                              $administrative_area_level_1
 * @property string|null                                                              $administrative_area_level_1_short
 * @property string|null                                                              $country
 * @property string|null                                                              $country_short
 * @property string|null                                                              $street_number
 * @property string|null                                                              $street_number_short
 * @property string|null                                                              $route
 * @property string|null                                                              $route_short
 * @property string|null                                                              $postal_code
 * @property string|null                                                              $postal_code_short
 * @property string|null                                                              $googleplace_url
 * @property string|null                                                              $googleplace_url_short
 * @property string|null                                                              $point_of_interest
 * @property string|null                                                              $point_of_interest_short
 * @property string|null                                                              $political
 * @property string|null                                                              $political_short
 * @property string|null                                                              $campground
 * @property string|null                                                              $campground_short
 * @property string|null                                                              $phone
 * @property string|null                                                              $website
 * @property string|null                                                              $email
 * @property string|null                                                              $formatted_address
 * @property string|null                                                              $min_order
 * @property string|null                                                              $delivery_cost
 * @property string|null                                                              $delivery_options
 * @property int|null                                                                 $order_action
 * @property string|null                                                              $price_currency
 * @property string|null                                                              $price_range
 * @property string|null                                                              $latitude
 * @property string|null                                                              $longitude
 * @property string|null                                                              $firstname
 * @property string|null                                                              $surname
 * @property string|null                                                              $address
 * @property int|null                                                                 $user_id
 * @property int|null                                                                 $status
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[]  $articles
 * @property int|null                                                                 $articles_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]    $containerWidgets
 * @property int|null                                                                 $container_widgets_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $create_url
 * @property mixed                                                                    $destroy_url
 * @property mixed                                                                    $detach_url
 * @property mixed                                                                    $edit_url
 * @property mixed                                                                    $first_name
 * @property mixed                                                                    $full_address
 * @property mixed                                                                    $full_name
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $index_edit_url
 * @property mixed                                                                    $index_url
 * @property mixed                                                                    $lang
 * @property mixed                                                                    $movedown_url
 * @property mixed                                                                    $moveup_url
 * @property mixed                                                                    $post_type
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Privacy[]  $privacies
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $show_url
 * @property mixed                                                                    $subtitle
 * @property mixed                                                                    $sur_name
 * @property mixed                                                                    $title
 * @property mixed                                                                    $txt
 * @property mixed                                                                    $update_url
 * @property mixed                                                                    $url
 * @property mixed                                                                    $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]    $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property int|null                                                                 $my_favorites_count
 * @property \Modules\Lang\Models\Post|null                                           $post
 * @property int|null                                                                 $privacies_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Privacy[]  $privacies_vecia
 * @property int|null                                                                 $privacies_vecia_count
 * @property Profile|null                                                             $profile
 * @property User|null                                                                $user
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]    $widgets
 * @property int|null                                                                 $widgets_count
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 9f39ec2 (first)
=======
 *
>>>>>>> ffb8c7b (first)
=======
 *
>>>>>>> 5bff340 (first)
=======
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeliveryCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeliveryOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFormattedAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMinOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereOrderAction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePriceCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePriceRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile withDistance($lat, $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
 * @property string|null $bio
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostType($value)
 * @property \Modules\LU\Models\PermUser|null                                     $perm
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
 *
 * @property string|null $bio
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostType($value)
 *
 * @property \Modules\LU\Models\PermUser|null                                     $perm
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 *
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile ofInPolygon(string $polygon_field, float $lat, float $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile withDistanceCustomField(string $lat_field, string $lng_field, float $lat, float $lng)
 * @method static \Modules\Blog\Database\Factories\ProfileFactory factory(...$parameters)
 * @mixin IdeHelperProfile
 */
class Profile extends BaseModelLang {
    use PrivacyTrait;
    use HasProfileTrait;
    use GeoTrait;
    use WidgetTrait;
    //use HasFactory;

    /**
     * se non metto $connection  quando faccio la relazione con lu, prende la connection di lu.
     *
     **/
    protected $connection = 'mysql'; // this will use the specified database conneciton

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'user_id', 'phone', 'email', 'bio'];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    //protected static function newFactory() {
    //    return ProfileFactory::new();
    //}

    //------- RELATIONSHIP ----------

    public function articles(): HasMany {
        return $this->hasMany(Article::class);
    }

    //---- mutators ---
    /*  ------------------ utilizza quello di HasProfileTrait
    public function getFullNameAttribute($value) {
        return $value;
        $user = User::firstOrCreate(['user_id' => $this->user_id]);
        $user->post()->firstOrCreate(['guid' => $user->handle, 'lang' => app()->getLocale()]);

        $value = $user->first_name.' '.$user->last_name;
        if (strlen($value) < 5) {
            $value .= ' '.$user->handle;
        }
        $value = trim($value);

        return $value;
    }
    */
}//end model
