<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// --------- models --------

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Geo\Models\Traits\GeoTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\User;
use Modules\Xot\Models\Traits\WidgetTrait;

/**
 * Modules\Blog\Models\Profile
 *
 * @property int $id
 * @property string|null $post_type
 * @property string|null $bio
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $firstname
 * @property string|null $surname
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address
 * @property int|null $user_id
 * @property string|null $premise
 * @property string|null $premise_short
 * @property string|null $locality
 * @property string|null $locality_short
 * @property string|null $postal_town
 * @property string|null $postal_town_short
 * @property string|null $administrative_area_level_3
 * @property string|null $administrative_area_level_3_short
 * @property string|null $administrative_area_level_2
 * @property string|null $administrative_area_level_2_short
 * @property string|null $administrative_area_level_1
 * @property string|null $administrative_area_level_1_short
 * @property string|null $country
 * @property string|null $country_short
 * @property string|null $street_number
 * @property string|null $street_number_short
 * @property string|null $route
 * @property string|null $route_short
 * @property string|null $postal_code
 * @property string|null $postal_code_short
 * @property string|null $googleplace_url
 * @property string|null $googleplace_url_short
 * @property string|null $point_of_interest
 * @property string|null $point_of_interest_short
 * @property string|null $political
 * @property string|null $political_short
 * @property string|null $campground
 * @property string|null $campground_short
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $containerWidgets
 * @property-read int|null $container_widgets_count
 * @property-read string|null $first_name
 * @property-read string|null $full_address
 * @property-read string|null $full_name
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read float|null $latitude
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Privacy[] $privacies
 * @property string|null $subtitle
 * @property string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read int|null $privacies_count
 * @property-read \Modules\Xot\Models\Profile|null $profile
 * @property-write mixed $url
 * @property-read User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $widgets
 * @property-read int|null $widgets_count
 * @method static \Modules\Blog\Database\Factories\ProfileFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile ofInPolygon(string $polygon_field, float $lat, float $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile withDistance(float $lat, float $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile withDistanceCustomField(string $lat_field, string $lng_field, float $lat, float $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 */
class Profile extends BaseModelLang {
    use GeoTrait;
    use HasProfileTrait;
    use PrivacyTrait;
    use WidgetTrait;
    // use HasFactory;

    /**
     * se non metto $connection  quando faccio la relazione con lu, prende la connection di lu.
     *
     **/
    protected $connection = 'mysql'; // this will use the specified database conneciton

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'user_id', 'phone', 'email', 'bio'];

    /*
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // protected static function newFactory() {
    //    return ProfileFactory::new();
    // }

    // ------- RELATIONSHIP ----------

    public function articles(): HasMany {
        return $this->hasMany(Article::class);
    }

    // ---- mutators ---
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
}// end model