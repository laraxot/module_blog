<?php

namespace Modules\Blog\Models;

use Modules\Blog\Models\Traits\RatingTrait;
//------services---------
//--- TRAITS ---
use Modules\Xot\Models\Traits\WidgetTrait;

/**
 * Modules\Blog\Models\Home.
 *
 * @property int                                                                      $id
 * @property string|null                                                              $created_by
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $deleted_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property string|null                                                              $icon_src
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]    $containerWidgets
 * @property int|null                                                                 $container_widgets_count
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
 * @property mixed                                                                    $my_rating
 * @property mixed                                                                    $post_type
 * @property mixed                                                                    $ratings_avg
 * @property int|null                                                                 $ratings_count
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
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[]   $myRatings
 * @property int|null                                                                 $my_ratings_count
 * @property \Modules\Blog\Models\Post|null                                           $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[]   $ratingObjectives
 * @property int|null                                                                 $rating_objectives_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[]   $ratings
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Widget[]    $widgets
 * @property int|null                                                                 $widgets_count
 * @method static \Illuminate\Database\Eloquent\Builder|Home newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Home newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Home ofLayoutPosition($layout_position)
 * @method static \Illuminate\Database\Eloquent\Builder|Home query()
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereIconSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Home whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Home withRating()
 * @mixin \Eloquent
 */
class Home extends BaseModelLang {
    use WidgetTrait;
    //use RatingTrait; // non si vota la home
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'article_type', 'icon_src'];

    //--------- relationship ---------------

    //---------- mututars -----------
}//end model
