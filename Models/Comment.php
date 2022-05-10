<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Modules\Rating\Models\Traits\RatingTrait;

/**
 * Modules\Blog\Models\Comment.
 *
 * @property int                                                                      $id
 * @property string|null                                                              $post_type
 * @property int|null                                                                 $post_id
 * @property string                                                                   $lang
 * @property int|null                                                                 $user_id
 * @property string                                                                   $txt
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $deleted_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property int|null                                                                 $status
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $my_rating
 * @property mixed                                                                    $ratings_avg
 * @property int|null                                                                 $ratings_count
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $subtitle
 * @property mixed                                                                    $title
 * @property mixed                                                                    $url
 * @property mixed                                                                    $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]    $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property int|null                                                                 $my_favorites_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $myRatings
 * @property int|null                                                                 $my_ratings_count
 * @property \Modules\Lang\Models\Post|null                                           $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratingObjectives
 * @property int|null                                                                 $rating_objectives_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratings
<<<<<<< HEAD
 *
=======
>>>>>>> eed9a9f (first)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comment whereAuthUserId($value)
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
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Comment withRating()
 * @mixin \Eloquent
<<<<<<< HEAD
 *
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 *
=======
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
>>>>>>> eed9a9f (first)
 * @method static \Modules\Blog\Database\Factories\CommentFactory factory(...$parameters)
 * @mixin IdeHelperComment
 */
class Comment extends BaseModelLang {
    use RatingTrait;
}
