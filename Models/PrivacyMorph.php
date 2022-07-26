<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\PrivacyMorph
 *
 * @property-read \Modules\Blog\Models\Privacy|null $privacy
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PrivacyMorph query()
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
