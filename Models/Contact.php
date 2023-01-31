<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Contact.
<<<<<<< HEAD
>>>>>>> 532d468a4759d4f5fa7956f2f94f26f0016c6484
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $post_type
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property \Modules\Lang\Models\Post|null                                       $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $url
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @method static \Modules\Blog\Database\Factories\ContactFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact   newQuery()
>>>>>>> 47ce820f83a6b78c9e67117ec7a92c012d45978e
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $post_type
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property \Modules\Lang\Models\Post|null                                       $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $url
 *
 * @method static \Modules\Blog\Database\Factories\ContactFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact   newQuery()
=======
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $post_type
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property \Modules\Lang\Models\Post|null                                       $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $url
 *
 * @method static \Modules\Blog\Database\Factories\ContactFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact   newQuery()
=======
=======
<<<<<<< HEAD
>>>>>>> 3ee9df2 (rebase)
=======
<<<<<<< HEAD
=======
>>>>>>> 8213e79 (Lint)
>>>>>>> 9d4a705 (rebase)
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $post_type
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property \Modules\Lang\Models\Post|null                                       $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $url
 *
 * @method static \Modules\Blog\Database\Factories\ContactFactory     factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact       newQuery()
<<<<<<< HEAD
=======
<<<<<<< HEAD
 *
<<<<<<< HEAD
=======
>>>>>>> 3ee9df2 (rebase)
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read string|null $post_type
 * @property string|null $subtitle
 * @property string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-write mixed $url
 * @method static \Modules\Blog\Database\Factories\ContactFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact newQuery()
<<<<<<< HEAD
>>>>>>> 378fec2 (up)
=======
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $post_type
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property \Modules\Lang\Models\Post|null                                       $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $url
 *
 * @method static \Modules\Blog\Database\Factories\ContactFactory     factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact       newQuery()
>>>>>>> 9e2a502 (Lint)
=======
>>>>>>> bc6d311 (up)
<<<<<<< HEAD
>>>>>>> 3ee9df2 (rebase)
=======
=======
>>>>>>> 8213e79 (Lint)
>>>>>>> 9d4a705 (rebase)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact       query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 *
 * @mixin \Eloquent
 */
class Contact extends BaseModelLang
{
    protected $fillable = ['id', 'post_id', 'post_type'];
}
