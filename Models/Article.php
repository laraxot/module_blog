<?php

namespace Modules\Blog\Models;

use Carbon\Carbon;
//----- traits ----
use Modules\Blog\Models\Traits\RatingTrait;
use Modules\LU\Models\Traits\HasProfileTrait;

//------services---------

//--- models ---

/**
 * Modules\Blog\Models\Article
 *
 * @property int $id
 * @property string|null $article_type
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $parent_type
 * @property int|null $parent_id
 * @property int|null $pos
 * @property int|null $auth_user_id
 * @property int|null $is_featured
 * @property-read \Illuminate\Database\Eloquent\Collection|Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $favorites
 * @property-read int|null $favorites_count
 * @property-read mixed $create_url
 * @property-read mixed $destroy_url
 * @property-read mixed $detach_url
 * @property-read mixed $edit_url
 * @property-read mixed $email
 * @property-read mixed $first_name
 * @property-read mixed $full_name
 * @property mixed $guid
 * @property mixed $image_src
 * @property-read mixed $index_edit_url
 * @property-read mixed $index_url
 * @property-read mixed $lang
 * @property-read mixed $movedown_url
 * @property-read mixed $moveup_url
 * @property-read mixed $my_rating
 * @property-read mixed $post_type
 * @property-read mixed $ratings_avg
 * @property-read int|null $ratings_count
 * @property mixed $routename
 * @property-read mixed $show_url
 * @property-read mixed $subtitle
 * @property-read mixed $sur_name
 * @property-read mixed $title
 * @property mixed $txt
 * @property-read mixed $update_url
 * @property mixed $url
 * @property-read mixed $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Favorite[] $myFavorites
 * @property-read int|null $my_favorites_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[] $myRatings
 * @property-read int|null $my_ratings_count
 * @property-read \Modules\Blog\Models\Post|null $post
 * @property-read \Modules\Blog\Models\Profile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[] $ratingObjectives
 * @property-read int|null $rating_objectives_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Rating[] $ratings
 * @property-read \Illuminate\Database\Eloquent\Collection|Article[] $sons
 * @property-read int|null $sons_count
 * @property-read \Modules\LU\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereArticleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereParentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost($guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withRating()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereRatingsAvg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereRatingsCount($value)
 * @property int $post_id
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePostId($value)
 */
class Article extends BaseModelLang {
    use RatingTrait;
    use HasProfileTrait;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'pos', 'article_type', 'published_at',
        'parent_id', 'parent_type', 'is_featured', 'auth_user_id',
    ];
    /**
     * @var string[]
     */
    protected $appends = ['title'];
    /* https://itnext.io/7-things-you-need-to-know-to-get-the-most-out-of-your-laravel-model-4f915acbb47c */

    //--------- relationship ---------------
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sons() {
        return $this->hasMany(Article::class, 'parent_id', 'id')->orderBy('pos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles() {
        return $this->hasMany(Article::class, 'parent_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function categories() {
        return $this->morphRelated(Category::class, true);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images() {
        return $this->morphMany(Image::class, 'post');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tags() {
        return $this->morphRelated(Tag::class, true);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments() {
        return $this->morphMany(Comment::class, 'post');
    }

    //---------- mututars -----------

    /**
     * @param mixed $value
     * @return int|null
     */
    public function getParentIdAttribute($value) {
        if ('' != $value) {
            return $value;
        }

        if (null == $this->getKey()) {
            return null;
        }

        $value = 0;
        $this->parent_id = $value;
        $this->save();

        return $value;
    }

    /*
    public function setPublishedAtAttribute($value) {
        ddd($value);
        if (\is_string($value)) {
            //$value = Carbon::now();
            //config('app.date_format')
            $value=Carbon::createFromFormat('d/m/Y H:i', $value);
        }
        $this->attributes['published_at'] = $value;
    }
    //*/
}//end model
