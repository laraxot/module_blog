<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

//use Modules\Rating\Models\Traits\RatingTrait;
//------services---------
//--- TRAITS ---
use Modules\Xot\Models\Traits\WidgetTrait;
use Sushi\Sushi;

/**
 * Modules\Blog\Models\Home.
 *
 * @property int                                                                   $id
 * @property string|null                                                           $created_by
 * @property string|null                                                           $updated_by
 * @property \Illuminate\Support\Carbon|null                                       $created_at
 * @property \Illuminate\Support\Carbon|null                                       $updated_at
 * @property string|null                                                           $icon_src
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
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[]  $images
 * @property int|null                                                              $images_count
 * @property \Modules\Lang\Models\Post|null                                        $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[]  $posts
 * @property int|null                                                              $posts_count
 * @property mixed                                                                 $url
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[] $widgets
 * @property int|null                                                              $widgets_count
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
 * @method static \Illuminate\Database\Eloquent\Builder|Home newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Home ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Home query()
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereIconSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
>>>>>>> 9225dd6 (up)
 * @property string|null $name
<<<<<<< HEAD
 *
<<<<<<< HEAD
=======
 * @property string|null $name
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
=======
 *
 * @property string|null $name
 *
>>>>>>> 9f39ec2 (first)
=======
 *
 * @property string|null $name
 *
>>>>>>> ffb8c7b (first)
=======
 *
 * @property string|null $name
 *
>>>>>>> 5bff340 (first)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereName($value)
 * @method static \Modules\Blog\Database\Factories\HomeFactory factory(...$parameters)
 * @mixin IdeHelperHome
 */
class Home extends BaseModelLang {
    use WidgetTrait;
    use Sushi;

    //use RatingTrait; // non si vota la home
    /**
     * @var string[]
     */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    protected $fillable = ['id', 'name', 'icon_src','created_by','updated_by'];
<<<<<<< HEAD
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
    protected $fillable = ['id', 'name', 'icon_src'];
>>>>>>> 9225dd6 (up)
=======
    protected $fillable = ['id', 'name', 'icon_src'];
>>>>>>> 9f39ec2 (first)
=======
    protected $fillable = ['id', 'name', 'icon_src'];
>>>>>>> ffb8c7b (first)
=======
    protected $fillable = ['id', 'name', 'icon_src'];
>>>>>>> 5bff340 (first)

    protected $rows = [
        [
            'id' => 'home',
            'name' => 'New York',
            'icon_src' => '',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            'created_by'=>'xot',
            'updated_by'=>'xot',
<<<<<<< HEAD
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
        ],
    ];

    //--------- relationship ---------------

    //---------- mututars -----------
}//end model
