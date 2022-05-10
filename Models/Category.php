<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Category.
 *
 * @property int                                                                      $id
 * @property string|null                                                              $related_type
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $deleted_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
 *
>>>>>>> 9225dd6 (up)
=======
 *
>>>>>>> 9f39ec2 (first)
=======
 *
>>>>>>> ffb8c7b (first)
=======
 *
>>>>>>> 5bff340 (first)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereRelatedType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @mixin \Eloquent
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
 *
>>>>>>> 9225dd6 (up)
=======
 *
>>>>>>> 9f39ec2 (first)
=======
 *
>>>>>>> ffb8c7b (first)
=======
 *
>>>>>>> 5bff340 (first)
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[] $articles
 * @property int|null                                                                $articles_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[]    $posts
 * @property int|null                                                                $posts_count
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
 *
>>>>>>> 9225dd6 (up)
=======
 *
>>>>>>> 9f39ec2 (first)
=======
 *
>>>>>>> ffb8c7b (first)
=======
 *
>>>>>>> 5bff340 (first)
 * @method static \Modules\Blog\Database\Factories\CategoryFactory factory(...$parameters)
 * @mixin IdeHelperCategory
 */
class Category extends BaseModelLang {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'related_type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function articles() {
        return $this->morphRelated(Article::class);
    }
}
