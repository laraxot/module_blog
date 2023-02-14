<?php
/**
 * --- -.
 */

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Categorizable.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable query()
 *
 * @mixin \Eloquent
 */
class Categorizable extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        // 'post_id', 'post_type',
        // 'photo_id', 'related_type',
        'user_id',
        'categorizable_type',
        'categorizable_id',
        'category_id',
    ];
}
