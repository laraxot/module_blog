<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\EventMorph
 *
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph query()
 * @mixin \Eloquent
 */
class EventMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'post_id', 'post_type', 'event_id', 'related_type', // -- testare se toglierli
        'user_id',
        // 'title','value',
    ];
}