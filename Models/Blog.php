<?php

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Blog
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @mixin \Eloquent
 */
class Blog extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = ['id'];
    //----- relationship -------
}
