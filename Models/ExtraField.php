<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Modules\Blog\Models\Traits\HasCategory;

class ExtraField extends BaseModel {
    use HasCategory;

    protected $fillable = ['id', 'name', 'type', 'rules'];
}
