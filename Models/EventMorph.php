<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

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