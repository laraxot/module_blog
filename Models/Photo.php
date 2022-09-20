<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

<<<<<<< HEAD
// ----- traits ----
=======
//----- traits ----
>>>>>>> 968db6d (up)
use Modules\Rating\Models\Traits\RatingTrait;

/**
 * Modules\Blog\Models\Photo.
 *
<<<<<<< HEAD
 * @property int                                                                  $post_id
 * @property string|null                                                          $updated_by
 * @property string|null                                                          $created_by
 * @property \Illuminate\Support\Carbon|null                                      $created_at
 * @property \Illuminate\Support\Carbon|null                                      $updated_at
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $post_type
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[] $images
 * @property int|null                                                             $images_count
 * @property \Modules\Lang\Models\Post|null                                       $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $url
 *
 * @method static \Modules\Blog\Database\Factories\PhotoFactory       factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo         newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo         newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo         query()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo         whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo         whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo         wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo         whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo         whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 *
 * @mixin \Eloquent
 */
class Photo extends BaseModelLang {
    // use RatingTrait;
=======
 * @property int                                                                      $id
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $created_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property int|null                                                                 $user_id
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property int|null                                                                 $favorites_count
 * @property mixed                                                                    $create_url
 * @property mixed                                                                    $destroy_url
 * @property mixed                                                                    $detach_url
 * @property mixed                                                                    $edit_url
 * @property mixed                                                                    $guid
 * @property mixed                                                                    $image_src
 * @property mixed                                                                    $index_edit_url
 * @property mixed                                                                    $index_url
 * @property mixed                                                                    $lang
 * @property mixed                                                                    $movedown_url
 * @property mixed                                                                    $moveup_url
 * @property mixed                                                                    $post_type
 * @property mixed                                                                    $routename
 * @property mixed                                                                    $show_url
 * @property mixed                                                                    $subtitle
 * @property mixed                                                                    $title
 * @property mixed                                                                    $txt
 * @property mixed                                                                    $update_url
 * @property mixed                                                                    $url
 * @property mixed                                                                    $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[]    $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property int|null                                                                 $my_favorites_count
 * @property \Modules\Blog\Models\Post|null                                           $post
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * @property int $post_id
 * @method static \Illuminate\Database\Eloquent\Builder|Photo wherePostId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereUserId($value)
 * @mixin IdeHelperPhoto
 */
class Photo extends BaseModelLang {
    //use RatingTrait;
>>>>>>> 968db6d (up)
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'article_type', 'published_at'];
}
