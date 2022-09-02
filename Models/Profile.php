<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// --------- models --------

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\LU\Models\User;
use Modules\LU\Casts\UserField;
use Illuminate\Support\Facades\Auth;
use Modules\Geo\Models\Traits\GeoTrait;
use Modules\Xot\Models\Traits\WidgetTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Modules\Ticket\Models\Traits\HasTicketTrait;

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
 * @property string|null $github_username
 * @property string|null $twitter
 * @property int|null $video_credits
 * @property int|null $clip_credits
 * @property int|null $clip_max_time
 * @property int|null $max_clips
 * @property string|null $review_cost
 * @property int|null $review_unit_time
 * @property int|null $max_search_days
 * @property int|null $max_alerts
 * @property int|null $moderator_id
 * @property int $parent_id
 * @property string|null $guid
 * @property string|null $date_from
 * @property string|null $date_to
 * @property string|null $interval
 * @property string|null $units_qty
 * @property string|null $units
 * @property mixed $handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $containerWidgets
 * @property-read int|null $container_widgets_count
 * @property-read string|null $first_name
 * @property-read string|null $full_address
 * @property-read string|null $full_name
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
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereClipCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereClipMaxTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGithubUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereGuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereInterval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMaxAlerts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMaxClips($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMaxSearchDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereModeratorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereReviewCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereReviewUnitTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUnits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUnitsQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereVideoCredits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile withDistance(float $lat, float $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile withDistanceCustomField(string $lat_field, string $lng_field, float $lat, float $lng)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 */
class Profile extends BaseModelLang
{
    use GeoTrait;
    use HasProfileTrait;
    use PrivacyTrait;
    use WidgetTrait;
    //use HasTicketTrait;
    // use HasFactory;

    /**
     * se non metto $connection  quando faccio la relazione con lu, prende la connection di lu.
     *
     **/
    protected $connection = 'mysql'; // this will use the specified database conneciton

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
        'twitter'
        //,'handle' solo in appends perche' non deve essere modificato
    ];
    /**
     * @var string[]
     */
    protected $appends = ['handle'];
    /**
     * @var array<string, string>
     */
    protected $casts = [
        //'date_start' => 'datetime:Y-m-d\TH:i',
        //'date_end' => 'datetime:Y-m-d\TH:i',
        'handle' => UserField::class,
    ];


    /*
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // protected static function newFactory() {
    //    return ProfileFactory::new();
    // }

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
        if (null == $user) {
            //$user1 = User::firstOrCreate(['id' => $this->user_id]);
            //dddx($user1->username());
        }
        return Attribute::make(
            get: fn ($value) =>  $user->handle,
        );
    }


    protected function name(): Attribute
    {
        $user = $this->user;
        return Attribute::make(
            get: fn ($value) => $user->first_name,
        );
    }

    protected function bio(): Attribute
    {
        $user = $this->user;

        return Attribute::make(
            get: fn ($value) => $user->txt,
        );
    }

    protected function githubUsername(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->github_username ?? '',
        );
    }

    protected function hasTwitterAccount(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => !empty($this->twitter()),
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
        return Auth::id() == $this->getKey();
    }

    public function isBanned(): bool
    {
        return $this->status == 'ban';
    }
}// end model