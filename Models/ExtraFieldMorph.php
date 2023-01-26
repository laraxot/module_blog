<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

class ExtraFieldMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'model_id', 'model_type',
        'user_id',
    ];
}
