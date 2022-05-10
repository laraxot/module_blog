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
 *
=======
>>>>>>> eed9a9f (first)
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
 *
 * @property string|null $name
 *
=======
 * @property string|null $name
>>>>>>> eed9a9f (first)
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
    protected $fillable = ['id', 'name', 'icon_src'];
=======
    protected $fillable = ['id', 'name', 'icon_src','created_by','updated_by'];
>>>>>>> eed9a9f (first)

    protected $rows = [
        [
            'id' => 'home',
            'name' => 'New York',
            'icon_src' => '',
<<<<<<< HEAD
=======
            'created_by'=>'xot',
            'updated_by'=>'xot',
>>>>>>> eed9a9f (first)
        ],
    ];

    //--------- relationship ---------------

    //---------- mututars -----------
}//end model
