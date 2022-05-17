<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Spatie\ModelStatus\Status as BaseStatus;

/**
 * Undocumented class.
 */
class Status extends BaseStatus {
    protected $fillable = ['id', 'name', 'reason', 'model_type', 'model_id', 'created_at', 'updated_at'];
}
