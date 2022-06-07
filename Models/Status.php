<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Spatie\ModelStatus\Status as BaseStatus;

/**
 * Modules\Blog\Models\Status
 *
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @method static \Illuminate\Database\Eloquent\Builder|Status newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Status query()
  * @property-read string $status
   * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\ModelStatus\Status[] $statuses
 * @property-read int|null $statuses_count
 * @property string|null $name
 * @mixin \Eloquent
 */
class Status extends BaseStatus {
    protected $fillable = ['id', 'name', 'reason', 'model_type', 'model_id', 'created_at', 'updated_at'];
   

    
}