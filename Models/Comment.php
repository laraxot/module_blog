<?php

namespace Modules\Blog\Models;

use Modules\Blog\Models\Traits\RatingTrait;

/**
 * Modules\Blog\Models\Comment
 *
 * @property int $id
 * @property string|null $post_type
 * @property int|null $post_id
 * @property string $lang
 * @property int|null $auth_user_id
 * @property string $txt
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property mixed $guid
 * @property mixed $image_src
 * @property-read mixed $my_rating
 * @property-read mixed $ratings_avg
 * @property-read int|null $ratings_count
 * @property mixed $routename
 * @property-read mixed $subtitle
 * @property-read mixed $title
 * @property mixed $url
 * @property-read mixed $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property-read int|null $my_favorites_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[] $myRatings
 * @property-read int|null $my_ratings_count
 * @property-read \Modules\Blog\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[] $ratingObjectives
 * @property-read int|null $rating_objectives_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[] $ratings
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
 */
class Comment extends BaseModelLang{

    use RatingTrait;
}
