<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Spatie\ModelStatus\Status as BaseStatus;

/**
 * Modules\Blog\Models\Status.
 *
 * @property string                                        $name
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
 * @property int $id
 * @property string|null $reason
 * @property string $model_type
 * @property int $model_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Status whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Status extends BaseStatus
{
    protected $fillable = [
        'id',
        'name',
        'reason',
        'model_type', 'model_id',
    ];
}
