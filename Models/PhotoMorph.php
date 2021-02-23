<<<<<<< HEAD
<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Modules\Blog\Models\PhotoMorph
 *
 * @property int $id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $related_type
 * @property int|null $photo_id
 * @property int|null $auth_user_id
 * @property string|null $note
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph wherePhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property int|null $related_id
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereRelatedId($value)
 */
class PhotoMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'photo_id', 'related_type',
        'auth_user_id',
    ];
}
=======
<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Relations\MorphPivot;
use Modules\Xot\Traits\Updater;

/**
 * Modules\Blog\Models\PhotoMorph
 *
 * @property int $id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $related_type
 * @property int|null $photo_id
 * @property int|null $auth_user_id
 * @property string|null $note
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph wherePhotoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereUpdatedBy($value)
 * @mixin \Eloquent
 * @property int|null $related_id
 * @method static \Illuminate\Database\Eloquent\Builder|PhotoMorph whereRelatedId($value)
 */
class PhotoMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'post_id', 'post_type',
        'photo_id', 'related_type',
        'auth_user_id',
    ];
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
