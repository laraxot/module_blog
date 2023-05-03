<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Label
 *
 * @method static \Modules\Blog\Database\Factories\LabelFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Label newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Label newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Label query()
 * @mixin \Eloquent
 */
class Label extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'label', 'title', 'label_id', 'label_type'];
}
