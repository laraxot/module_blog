<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

class ExtraField extends BaseModel {
    protected $fillable = ['id', 'name', 'type', 'rules'];
}
