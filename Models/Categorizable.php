<?php
/**
 * --- -.
 */

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Categorizable.
 *
 * @property int $category_id
 * @property string $categorizable_type
 * @property int $categorizable_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable whereCategorizableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable whereCategorizableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categorizable whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Categorizable extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'categorizable_type',
        'categorizable_id',
        'category_id',
    ];
}
