<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\ArticleMorph.
 *
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph query()
 *
 * @mixin \Eloquent
 */
class ArticleMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'post_id', 'post_type', 'article_id', 'related_type', // -- testare se toglierli
        'user_id',
        // 'title','value',
    ];
}
