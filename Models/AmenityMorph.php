<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Modules\Blog\Models\AmenityMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $amenity_id
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $auth_user_id
 * @property string|null                     $note
 *
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereAmenityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereUpdatedBy($value)
 * @mixin \Eloquent
 *
 * @property \Modules\LU\Models\User|null $user
 */
class AmenityMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'amenity'];

    public function user(): BelongsTo {
        return $this->belongsTo(\Modules\LU\Models\User::class, 'auth_user_id', 'auth_user_id');
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Modules\Blog\Models\AmenityMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $amenity_id
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null                        $auth_user_id
 * @property string|null                     $note
 *
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereAmenityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AmenityMorph whereUpdatedBy($value)
 * @mixin \Eloquent
 *
 * @property \Modules\LU\Models\User|null $user
 */
class AmenityMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'amenity'];

    public function user(): BelongsTo {
        return $this->belongsTo(\Modules\LU\Models\User::class, 'auth_user_id', 'auth_user_id');
    }
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
