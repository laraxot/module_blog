<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Modules\Rating\Models\Traits\RatingTrait;

/**
 * Modules\Blog\Models\Comment.
 *
 * @property string|null                                                                  $guid
 * @property string|null                                                                  $image_src
 * @property string|null                                                                  $lang
 * @property \Illuminate\Support\Collection                                               $my_rating
 * @property string|null                                                                  $post_type
 * @property float|null                                                                   $ratings_avg
 * @property int|null                                                                     $ratings_count
 * @property string|null                                                                  $subtitle
 * @property string|null                                                                  $title
 * @property string|null                                                                  $txt
 * @property string|null                                                                  $user_handle
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Rating\Models\Rating> $myRatings
 * @property int|null                                                                     $my_ratings_count
 * @property \Modules\Lang\Models\Post|null                                               $post
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Lang\Models\Post>     $posts
 * @property int|null                                                                     $posts_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Rating\Models\Rating> $ratingObjectives
 * @property int|null                                                                     $rating_objectives_count
 * @property \Illuminate\Database\Eloquent\Collection<int, \Modules\Rating\Models\Rating> $ratings
 * @property mixed                                                                        $url
 *
 * @method static \Modules\Blog\Database\Factories\CommentFactory     factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Comment       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment       newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment       query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment       withRating()
 *
 * @mixin \Eloquent
 */
class Comment extends BaseModelLang
{
    use RatingTrait;
    protected $fillable = ['created_at', 'created_by', 'deleted_by', 'id', 'lang', 'post_id', 'post_type', 'status', 'txt', 'updated_at', 'updated_by', 'user_id'];
}
