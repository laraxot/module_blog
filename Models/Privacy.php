<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

class Privacy extends BaseModelLang {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'related_type', 'obligatory'];
}