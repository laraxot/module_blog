<?php

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\PostLink
 *
 * @method static \Illuminate\Database\Eloquent\Builder|PostLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostLink query()
 * @mixin \Eloquent
 */
class PostLink extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'url', 'title', 'type'];
}
