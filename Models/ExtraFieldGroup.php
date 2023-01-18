<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

class ExtraFieldGroup extends BaseModel {
    protected $fillable = ['id', 'name', 'cardinality'];

    public function fields() {
        return $this->hasMany(ExtraField::class, 'group_id');
    }
}
