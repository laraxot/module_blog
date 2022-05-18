<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// ----- traits ----
use Modules\Blog\Models\Traits\HasAuthor;
use Modules\Blog\Models\Traits\HasSlug;
use Modules\Blog\Models\Traits\HasTags;
use Modules\Blog\Models\Traits\HasTimestamps;
use Modules\Blog\Models\Traits\PreparesSearch;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\Rating\Models\Traits\HasLikes;
use Modules\Rating\Models\Traits\RatingTrait;
use Modules\Tag\Models\Traits\HasTagTrait;

/**
 * Modules\Blog\Models\Article.
 *
 * @property \Illuminate\Database\Eloquent\Collection|Article[]                       $articles
 * @property int|null                                                                 $articles_count
 * @property \Modules\LU\Models\User                                                  $author
 * @property \Modules\LU\Models\User                                                  $authorRelation
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Category[] $categories
 * @property int|null                                                                 $categories_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Comment[]  $comments
 * @property int|null                                                                 $comments_count
 * @property string|null                                                              $email
 * @property string|null                                                              $first_name
 * @property string|null                                                              $full_name
 * @property string|null                                                              $guid
 * @property string|null                                                              $image_src
 * @property string|null                                                              $lang
 * @property \Illuminate\Support\Collection                                           $my_rating
 * @property int|null                                                                 $parent_id
 * @property string|null                                                              $post_type
 * @property float                                                                    $ratings_avg
 * @property int|null                                                                 $ratings_count
 * @property string|null                                                              $subtitle
 * @property string|null                                                              $title
 * @property string|null                                                              $txt
 * @property string|null                                                              $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[]     $images
 * @property int|null                                                                 $images_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Like[]   $likesRelation
 * @property int|null                                                                 $likes_relation_count
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent                            $linkable
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $myRatings
 * @property int|null                                                                 $my_ratings_count
 * @property \Modules\Lang\Models\Post|null                                           $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[]     $posts
 * @property int|null                                                                 $posts_count
 * @property \Modules\Xot\Models\Profile|null                                         $profile
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratingObjectives
 * @property int|null                                                                 $rating_objectives_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratings
 * @property mixed                                                                    $slug
 * @property mixed                                                                    $url
 * @property \Illuminate\Database\Eloquent\Collection|Article[]                       $sons
 * @property int|null                                                                 $sons_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Tag\Models\Tag[]       $tags
 * @property int|null                                                                 $tags_count
 * @property \Modules\LU\Models\User                                                  $user
 * @method static \Illuminate\Database\Eloquent\Builder|Article approved()
 * @method static \Illuminate\Database\Eloquent\Builder|Article article($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article author($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article awaitingApproval()
 * @method static \Illuminate\Database\Eloquent\Builder|Article category($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article differentFromCurrentArticle($current_article)
 * @method static \Illuminate\Database\Eloquent\Builder|Article forTag(string $tag)
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article notApproved()
 * @method static \Illuminate\Database\Eloquent\Builder|Article notPinned()
 * @method static \Illuminate\Database\Eloquent\Builder|Article notPublished()
 * @method static \Illuminate\Database\Eloquent\Builder|Article notShared()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Article ofTag(int $tag_cat_id, int $tag_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article pinned()
 * @method static \Illuminate\Database\Eloquent\Builder|Article popular()
 * @method static \Illuminate\Database\Eloquent\Builder|Article published()
 * @method static \Illuminate\Database\Eloquent\Builder|Article publishedUntilToday()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article recent()
 * @method static \Illuminate\Database\Eloquent\Builder|Article search($searching)
 * @method static \Illuminate\Database\Eloquent\Builder|Article shared()
 * @method static \Illuminate\Database\Eloquent\Builder|Article showHomepage()
 * @method static \Illuminate\Database\Eloquent\Builder|Article submitted()
 * @method static \Illuminate\Database\Eloquent\Builder|Article tag($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article trending()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withRating()
 * @mixin \Eloquent
 * @method static \Modules\Blog\Database\Factories\ArticleFactory factory(...$parameters)
 * @mixin IdeHelperArticle
 */
class Article extends BaseModelLang {
    use HasAuthor;
    use HasLikes;
    use HasProfileTrait;
    use HasSlug;
    use HasTagTrait;
    use HasTimestamps;
    use PreparesSearch; // non so se funziona, credo meglio HasProfileTrait
    // use HasTags;
    use RatingTrait;
    use Traits\Extras\ArticleExtra;
    use Traits\Mutators\ArticleMutator;
    use Traits\Relationships\ArticleRelationship;
    use Traits\Scopes\ArticleScope;

    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'pos', 'article_type', 'published_at',
        'parent_id', 'parent_type', 'is_featured', 'user_id',
        'status_id',
    ];
    /**
     * @var string[]
     */
    protected $appends = ['title'];

    /**
     * @var array
     */
    protected $casts = [
        // 'published_at' => 'datetime:Y-m-d', // da verificare
    ];

    /**
     * @var string[]
     */
    protected $dates = ['published_at', 'created_at', 'updated_at', 'submitted_at'];

    /* https://itnext.io/7-things-you-need-to-know-to-get-the-most-out-of-your-laravel-model-4f915acbb47c */
}// end model
