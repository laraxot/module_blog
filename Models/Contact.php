<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Contact.
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 8213e79 (Lint)
=======
<<<<<<< HEAD
=======
>>>>>>> 532d468a4759d4f5fa7956f2f94f26f0016c6484
 *
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> b4476b9 (Lint)
>>>>>>> 8213e79 (Lint)
=======
>>>>>>> 2f1bc22 (rebase)
=======
=======
>>>>>>> 8213e79 (Lint)
>>>>>>> 6fa5a25 (rebase)
<<<<<<< HEAD
>>>>>>> 31b2874bced50f2cc56f4271d588e071d41fd17a
=======
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
 * @method static \Modules\Blog\Database\Factories\ContactFactory     factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Contact       newQuery()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f1bc22 (rebase)
=======
>>>>>>> 6fa5a25 (rebase)
=======
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
>>>>>>> bc6d311 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8213e79 (Lint)
=======
>>>>>>> 2f1bc22 (rebase)
=======
=======
>>>>>>> 8213e79 (Lint)
>>>>>>> 6fa5a25 (rebase)
=======
>>>>>>> b4476b9 (Lint)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Contact       query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 *
 * @mixin \Eloquent
 */
class Contact extends BaseModelLang {
    protected $fillable = ['id', 'post_id', 'post_type'];
}
