<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// --------- models --------

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Geo\Models\Traits\GeoTrait;
use Modules\Ticket\Models\Traits\HasTicketTrait;
use Modules\User\Casts\UserField;
use Modules\User\Models\Traits\HasProfileTrait;
use Modules\User\Models\User;
use Modules\Xot\Contracts\ModelProfileContract;
use Modules\Xot\Models\Traits\WidgetTrait;
use Spatie\ModelStatus\HasStatuses;
use Spatie\Permission\Traits\HasRoles;

/**
 * Modules\Blog\Models\Profile.
 *
 * @property int                                                                            $id
 * @property string|null                                                                    $post_type
 * @property string|null                                                                    $bio
 * @property \Illuminate\Support\Carbon|null                                                $created_at
 * @property \Illuminate\Support\Carbon|null                                                $updated_at
 * @property string|null                                                                    $created_by
 * @property string|null                                                                    $updated_by
 * @property string|null                                                                    $deleted_by
 * @property string|null                                                                    $firstname
 * @property string|null                                                                    $surname
 * @property string|null                                                                    $email
 * @property string|null                                                                    $phone
 * @property string|null                                                                    $address
 * @property int|null                                                                       $user_id
 * @property string|null                                                                    $premise
 * @property string|null                                                                    $premise_short
 * @property string|null                                                                    $locality
 * @property string|null                                                                    $locality_short
 * @property string|null                                                                    $postal_town
 * @property string|null                                                                    $postal_town_short
 * @property string|null                                                                    $administrative_area_level_3
 * @property string|null                                                                    $administrative_area_level_3_short
 * @property string|null                                                                    $administrative_area_level_2
 * @property string|null                                                                    $administrative_area_level_2_short
 * @property string|null                                                                    $administrative_area_level_1
 * @property string|null                                                                    $administrative_area_level_1_short
 * @property string|null                                                                    $country
 * @property string|null                                                                    $country_short
 * @property string|null                                                                    $street_number
 * @property string|null                                                                    $street_number_short
 * @property string|null                                                                    $route
 * @property string|null                                                                    $route_short
 * @property string|null                                                                    $postal_code
 * @property string|null                                                                    $postal_code_short
 * @property string|null                                                                    $googleplace_url
 * @property string|null                                                                    $googleplace_url_short
 * @property string|null                                                                    $point_of_interest
 * @property string|null                                                                    $point_of_interest_short
 * @property string|null                                                                    $political
 * @property string|null                                                                    $political_short
 * @property string|null                                                                    $campground
 * @property string|null                                                                    $campground_short
 * @property string|null                                                                    $first_name
 * @property string|null                                                                    $last_name
 * @property mixed                                                                          $handle
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Article>    $articles
 * @property int|null                                                                       $articles_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Xot\Models\Widget>      $containerWidgets
 * @property int|null                                                                       $container_widgets_count
 * @property string|null                                                                    $guid
 * @property string|null                                                                    $image_src
 * @property string|null                                                                    $lang
 * @property string|null                                                                    $subtitle
 * @property string|null                                                                    $title
 * @property string|null                                                                    $txt
 * @property string|null                                                                    $user_handle
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Permission> $permissions
 * @property int|null                                                                       $permissions_count
 * @property \Modules\Lang\Models\Post|null                                                 $post
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Lang\Models\Post>       $posts
 * @property int|null                                                                       $posts_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\User\Models\Role>       $roles
 * @property int|null                                                                       $roles_count
 * @property mixed                                                                          $url
 * @property \Illuminate\Database\Eloquent\Collection<int, \Spatie\ModelStatus\Status>      $statuses
 * @property int|null                                                                       $statuses_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Xot\Models\Widget>      $widgets
 * @property int|null                                                                       $widgets_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       currentStatus(...$names)
 * @method static \Modules\Blog\Database\Factories\ProfileFactory     factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       ofLayoutPosition(string $layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel1Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel2Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereAdministrativeAreaLevel3Short($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCampground($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCampgroundShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCountryShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGoogleplaceUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereGoogleplaceUrlShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLocality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereLocalityShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePointOfInterest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePointOfInterestShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePolitical($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePoliticalShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalCodeShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePostalTownShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePremise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       wherePremiseShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereRoute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereRouteShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStreetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereStreetNumberShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile       whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 *
 * @mixin \Eloquent
 */
class Profile extends BaseModelLang implements ModelProfileContract
{
    // use GeoTrait; -- to profile in geo
    // use HasProfileTrait;  // E' un profilo, no ha un profilo
    use HasRoles;
    use HasStatuses;
    // use PrivacyTrait;
    use WidgetTrait;
    // use HasTicketTrait;
    // use HasFactory;

    /**
     * se non metto $connection  quando faccio la relazione con lu, prende la connection di lu.
     *
     **/
    protected $connection = 'mysql'; // this will use the specified database connection

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'phone',
        'email',
        'bio',
        'github_username',
        'has_twitter_account',
        'twitter',
        // ,'handle' solo in appends perche' non deve essere modificato
    ];
    /**
     * @var string[]
     */
    protected $appends = ['handle'];
    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'date_start' => 'datetime:Y-m-d\TH:i',
        // 'date_end' => 'datetime:Y-m-d\TH:i',
        'handle' => UserField::class,
    ];

    // ------- RELATIONSHIP ----------

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'author_id', 'user_id');
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

    protected function username(): Attribute
    {
        $user = $this->user;
        if (null === $user) {
            // $user1 = User::firstOrCreate(['id' => $this->user_id]);
            // dddx($user1->username());
            $user = (object) [
                'handle' => 'no-set',
            ];
        }

        return Attribute::make(
            get: fn ($value) => $user->handle,
        );
    }

    protected function name(): Attribute
    {
        $user = $this->user;
        if (null === $user) {
            $user = (object) [
                'first_name' => 'no-set',
            ];
        }

        return Attribute::make(
            get: fn ($value) => $user->first_name,
        );
    }

    /*
    Access to an undefined property Modules\User\Models\User::$txt.
    protected function bio(): Attribute {
        $user = $this->user;

        return Attribute::make(
            get: fn ($value) => $user->txt,
        );
    }
    */

    protected function githubUsername(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->github_username ?? '',
        );
    }

    protected function hasTwitterAccount(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => false, // ! empty($this->twitter()),
        );
    }

    protected function twitter(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '',
        );
    }

    public function isLoggedInUser(): bool
    {
        return Auth::id() === $this->getKey();
    }

    public function isBanned(): bool
    {
        return 'ban' === $this->status;
    }
}// end model
