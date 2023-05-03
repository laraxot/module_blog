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
use Modules\LU\Casts\UserField;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\User;
use Modules\Ticket\Models\Traits\HasTicketTrait;
use Modules\Xot\Contracts\ModelProfileContract;
use Modules\Xot\Models\Traits\WidgetTrait;
use Spatie\ModelStatus\HasStatuses;
use Spatie\Permission\Traits\HasRoles;

/**
 * Modules\Blog\Models\Profile
 *
 * @property int $id
 * @property string|null $post_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $address
 * @property int|null $user_id
 * @property string|null $bio
 * @property string|null $emails
 * @property string|null $mobiles
 * @property string|null $envelope_id
 * @property int|null $is_signed
 * @property int $company_selected_id
 * @property string $company_data_requests
 * @property string|null $nexi_transaction_code
 * @property mixed $handle
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Article> $articles
 * @property-read int|null $articles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Xot\Models\Widget> $containerWidgets
 * @property-read int|null $container_widgets_count
 * @property-read string|null $full_name
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read string $status
 * @property string|null $subtitle
 * @property string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\LU\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Lang\Models\Post> $posts
 * @property-read int|null $posts_count
 * @property-read Profile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\LU\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-write mixed $url
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Blog\Models\Status> $statuses
 * @property-read int|null $statuses_count
 * @property-read User|null $user
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Xot\Models\Widget> $widgets
 * @property-read int|null $widgets_count
 * @method static \Illuminate\Database\Eloquent\Builder|Profile currentStatus(...$names)
 * @method static \Modules\Blog\Database\Factories\ProfileFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile query()
 * @method static \Illuminate\Database\Eloquent\Builder|Profile role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCompanyDataRequests($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCompanySelectedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereEnvelopeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereIsSigned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereMobiles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereNexiTransactionCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Profile whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 */
class Profile extends BaseModelLang implements ModelProfileContract
{
    // use GeoTrait; -- to profile in geo
    use HasProfileTrait;
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
    Access to an undefined property Modules\LU\Models\User::$txt.
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
