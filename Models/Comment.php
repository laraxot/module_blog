<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Modules\Rating\Models\Traits\RatingTrait;

/**
 * Modules\Blog\Models\Comment.
 *
 * @property int $id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string|null $lang
 * @property int|null $user_id
 * @property string|null $txt
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $status
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read \Illuminate\Support\Collection $my_rating
 * @property-read float|null $ratings_avg
 * @property-read int|null $ratings_count
 * @property string|null $subtitle
 * @property string|null $title
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Rating\Models\Rating> $myRatings
 * @property-read int|null $my_ratings_count
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Lang\Models\Post> $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Rating\Models\Rating> $ratingObjectives
 * @property-read int|null $rating_objectives_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Rating\Models\Rating> $ratings
 * @property-write mixed $url
 * @method static \Modules\Blog\Database\Factories\CommentFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereTxt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment withRating()
 * @mixin \Eloquent
 */
class Comment extends BaseModelLang
{
    use RatingTrait;
    protected $fillable = ['created_at', 'created_by', 'deleted_by', 'id', 'lang', 'post_id', 'post_type', 'status', 'txt', 'updated_at', 'updated_by', 'user_id'];
}
