<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\Blog\Models\Traits\PrivacyTrait;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Casts\UserField;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\LU\Models\User;
use Modules\LU\Models\User;
use Modules\LU\Models\User;
use Modules\LU\Models\User;
use Modules\Ticket\Models\Traits\HasTicketTrait;
use Modules\Ticket\Models\Traits\HasTicketTrait;
use Modules\Xot\Models\Traits\WidgetTrait;
use Modules\Xot\Models\Traits\WidgetTrait;
use Spatie\ModelStatus\HasStatuses;
use Spatie\ModelStatus\HasStatuses;
use Spatie\ModelStatus\HasStatuses;
use Spatie\ModelStatus\HasStatuses;

class Profile extends BaseModelLang {
    use HasProfileTrait;
    use WidgetTrait;
    use HasStatuses;
    // use PrivacyTrait;
    use WidgetTrait;
    use HasStatuses;
    // use PrivacyTrait;
    use WidgetTrait;
    use HasStatuses;
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

    public function articles(): HasMany {
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

    protected function username(): Attribute {
        $user = $this->user;
        if (null == $user) {
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

    protected function name(): Attribute {
        $user = $this->user;
        if (null == $user) {
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

    protected function githubUsername(): Attribute {
        return Attribute::make(
            get: fn ($value) => $this->github_username ?? '',
        );
    }

    protected function hasTwitterAccount(): Attribute {
        return Attribute::make(
            get: fn ($value) => false, // ! empty($this->twitter()),
        );
    }

    protected function twitter(): Attribute {
        return Attribute::make(
            get: fn ($value) => '',
        );
    }

    public function isLoggedInUser(): bool {
        return Auth::id() === $this->getKey();
    }

    public function isBanned(): bool {
        return 'ban' === $this->status;
    }
}// end model