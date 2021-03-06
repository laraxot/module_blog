<?php

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\TagMorph
 *
 * @property int $id
 * @property int|null $auth_user_id
 * @property string|null $note
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $tag_type
 * @property int|null $tag_id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereTagId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereTagType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TagMorph whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class TagMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $attributes = ['related_type' => 'tag'];
}
