<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

class ExtraFieldsGroup extends BaseModel {
    protected $fillable = ['id', 'name', 'cardinality'];
}
