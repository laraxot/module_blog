<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\ArticleMorph.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string|null                     $related_type
 * @property int|null                        $user_id
 * @property string|null                     $note
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int                             $article_id
 * @property string                          $title
 * @property string                          $value
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereArticleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereValue($value)
 * @mixin \Eloquent
 * @property int|null $related_id
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereRelatedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleMorph whereUserId($value)
 * @mixin IdeHelperArticleMorph
 * @property int|null $auth_user_id
 */
class ArticleMorph extends BaseMorphPivot {
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'post_id', 'post_type', 'article_id', 'related_type', // -- testare se toglierli
        'user_id',
        // 'title','value',
    ];
}
