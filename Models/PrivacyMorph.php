<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\PrivacyMorph
 *
 * @property int $id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $related_type
 * @property int|null $related_id
 * @property string|null $title
 * @property int|null $value
 * @property int|null $auth_user_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Modules\Blog\Models\Privacy|null $privacy
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereRelatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph whereValue($value)
 * @mixin \Eloquent
 */
class PrivacyMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'post_id', 'post_type', 'privacy_id', 'related_type', // -- testare se toglierli
        'user_id',
        'title', 'value',
    ];
    // ---------------------------------------------------------------------------

    public function privacy(): \Illuminate\Database\Eloquent\Relations\HasOne {
        return $this->hasOne(Privacy::class); // , 'id', 'privacy_id');
    }

    // ---------- mutators -------------------
    /*
    public function setTitleAttribute($value) {
        if (! isset($this->attributes['value'])) {
            $this->attributes['value'] = 0;
        }
    }
    */
}
