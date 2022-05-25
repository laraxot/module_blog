<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Privacy.
 *
 * @property int                                                                      $id
 * @property string|null                                                              $related_type
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $deleted_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property int|null                                                                 $obligatory
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
 * @property \Modules\Lang\Models\Post|null                                           $post
 * >>>>>>> 9225dd6 (up)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereObligatory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
 * >>>>>>> 9225dd6 (up)
 * @property int $post_id
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy wherePostId($value)
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property int                                                                  $post_id
 * @method static \Illuminate\Database\Eloquent\Builder|Privacy wherePostId($value)
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * >>>>>>> 9225dd6 (up)
 * @method static \Modules\Blog\Database\Factories\PrivacyFactory factory(...$parameters)
 * @mixin IdeHelperPrivacy
 */
class Privacy extends BaseModelLang {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'related_type', 'obligatory'];
}
