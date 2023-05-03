<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\EventMorph
 *
 * @property int $id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $related_type
 * @property int|null $event_id
 * @property int|null $user_id
 * @property string|null $note
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventMorph whereUserId($value)
 * @mixin \Eloquent
 */
class EventMorph extends BaseMorphPivot
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'post_id', 'post_type', 'event_id', 'related_type', // -- testare se toglierli
        'user_id',
        // 'title','value',
    ];
}
