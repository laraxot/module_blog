<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Modules\Rating\Models\Traits\RatingTrait;

/**
 * Modules\Blog\Models\Comment.
 *
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read \Illuminate\Support\Collection $my_rating
 * @property-read string|null $post_type
 * @property-read float|null $ratings_avg
 * @property-read int|null $ratings_count
 * @property string|null $subtitle
 * @property string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $myRatings
 * @property-read int|null $my_ratings_count
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratingObjectives
 * @property-read int|null $rating_objectives_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratings
 * @property-write mixed $url
 * @method static \Modules\Blog\Database\Factories\CommentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment withRating()
 * @mixin \Eloquent
 */
class Comment extends BaseModelLang {
    use RatingTrait;
    protected $fillable = ['created_at', 'created_by', 'deleted_by', 'id', 'lang', 'post_id', 'post_type', 'status', 'txt', 'updated_at', 'updated_by', 'user_id'];
}
