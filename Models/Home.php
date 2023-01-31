<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// use Modules\Rating\Models\Traits\RatingTrait;
// ------services---------
// --- TRAITS ---
use Modules\Xot\Models\Traits\WidgetTrait;
use Sushi\Sushi;

/**
 * Modules\Blog\Models\Home.
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
 * @property int|null                                                              $id
 * @property string|null                                                           $name
 * @property string|null                                                           $icon_src
 * @property string|null                                                           $created_by
 * @property string|null                                                           $updated_by
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $containerWidgets
 * @property int|null                                                              $container_widgets_count
 * @property string|null                                                           $guid
 * @property string|null                                                           $image_src
 * @property string|null                                                           $lang
 * @property string|null                                                           $post_type
 * @property string|null                                                           $subtitle
 * @property string|null                                                           $title
 * @property string|null                                                           $txt
 * @property string|null                                                           $user_handle
 * @property \Modules\Lang\Models\Post|null                                        $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[]  $posts
 * @property int|null                                                              $posts_count
 * @property mixed                                                                 $url
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $widgets
 * @property int|null                                                              $widgets_count
 *
 * @method static \Modules\Blog\Database\Factories\HomeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Home   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home   newQuery()
=======
 * @property int|null                                                              $id
 * @property string|null                                                           $name
 * @property string|null                                                           $icon_src
 * @property string|null                                                           $created_by
 * @property string|null                                                           $updated_by
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $containerWidgets
 * @property int|null                                                              $container_widgets_count
 * @property string|null                                                           $guid
 * @property string|null                                                           $image_src
 * @property string|null                                                           $lang
 * @property string|null                                                           $post_type
 * @property string|null                                                           $subtitle
 * @property string|null                                                           $title
 * @property string|null                                                           $txt
 * @property string|null                                                           $user_handle
 * @property \Modules\Lang\Models\Post|null                                        $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[]  $posts
 * @property int|null                                                              $posts_count
 * @property mixed                                                                 $url
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $widgets
 * @property int|null                                                              $widgets_count
 *
 * @method static \Modules\Blog\Database\Factories\HomeFactory        factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Home          newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home          newQuery()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 2f1bc22 (rebase)
=======
>>>>>>> 6fa5a25 (rebase)
=======
 * @property int|null $id
 * @property string|null $name
 * @property string|null $icon_src
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $containerWidgets
 * @property-read int|null $container_widgets_count
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $widgets
 * @property-read int|null $widgets_count
 * @method static \Modules\Blog\Database\Factories\HomeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Home newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home newQuery()
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
 * @method static \Illuminate\Database\Eloquent\Builder|Home          ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Home          query()
 * @method static \Illuminate\Database\Eloquent\Builder|Home          whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home          whereIconSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home          whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home          whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home          whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 *
 * @mixin \Eloquent
 */
class Home extends BaseModelLang {
    use Sushi;
    use WidgetTrait;

    // use RatingTrait; // non si vota la home
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'name', 'icon_src', 'created_by', 'updated_by'];

    /**
     * Undocumented variable.
     *
     * @var array<int, array<string, string>>
     */
    protected $rows = [
        [
            'id' => 'home',
            'name' => 'New York',
            'icon_src' => '',
            'created_by' => 'xot',
            'updated_by' => 'xot',
        ],
    ];

    // --------- relationship ---------------

    // ---------- mututars -----------
}// end model
