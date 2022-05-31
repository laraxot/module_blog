<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// ----- traits ----
use Modules\Blog\Models\Traits\HasAuthor;
use Modules\Blog\Models\Traits\HasSlug;
// use Modules\Blog\Models\Traits\HasTags;
use Modules\Blog\Models\Traits\HasTimestamps;
use Modules\Blog\Models\Traits\PreparesSearch;
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\Rating\Models\Traits\HasLikes;
use Modules\Rating\Models\Traits\RatingTrait;
// use Modules\Tag\Models\Traits\HasTagTrait;
use Spatie\Tags\HasTags; // spatie tags

/**
 * Modules\Blog\Models\Article
 *
 * @property int $id
 * @property string|null $parent_type
 * @property int|null $parent_id
 * @property int|null $pos
 * @property string|null $article_type
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property string|null $updated_by
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $user_id
 * @property int|null $is_featured
 * @property float $ratings_avg
 * @property-read int|null $ratings_count
 * @property int|null $status_id
 * @property int $show_on_homepage
 * @property int|null $read_time
 * @property int|null $author_id
 * @property int $is_pinned
 * @property \Illuminate\Support\Carbon|null $submitted_at
 * @property string|null $approved_at
 * @property string|null $original_url
 * @property int|null $series_id
 * @property-read \Illuminate\Database\Eloquent\Collection|Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Modules\LU\Models\User|null $author
 * @property-read \Modules\LU\Models\User|null $authorRelation
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read string|null $email
 * @property-read string|null $first_name
 * @property-read string|null $full_name
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read \Illuminate\Support\Collection $my_rating
 * @property-read string|null $post_type
 * @property string|null $subtitle
 * @property string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Like[] $likesRelation
 * @property-read int|null $likes_relation_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $myRatings
 * @property-read int|null $my_ratings_count
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Modules\Xot\Models\Profile|null $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratingObjectives
 * @property-read int|null $rating_objectives_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratings
 * @property-write mixed $slug
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Tag\Models\Tag[] $tags
 * @property-write mixed $url
 * @property-read \Illuminate\Database\Eloquent\Collection|Article[] $sons
 * @property-read int|null $sons_count
 * @property-read int|null $tags_count
 * @property-read \Modules\LU\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Article approved()
 * @method static \Illuminate\Database\Eloquent\Builder|Article article($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article author($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article awaitingApproval()
 * @method static \Illuminate\Database\Eloquent\Builder|Article category($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article differentFromCurrentArticle($current_article)
 * @method static \Modules\Blog\Database\Factories\ArticleFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Article forTag(string $tag)
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article notApproved()
 * @method static \Illuminate\Database\Eloquent\Builder|Article notPinned()
 * @method static \Illuminate\Database\Eloquent\Builder|Article notPublished()
 * @method static \Illuminate\Database\Eloquent\Builder|Article notShared()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
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
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereApprovedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereArticleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsPinned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereOriginalUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereParentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereRatingsAvg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereRatingsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereReadTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSeriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereShowOnHomepage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withRating()
 * @mixin \Eloquent
 */
class Article extends BaseModelLang {
    use HasAuthor;
    use HasLikes;
    use HasProfileTrait;
    use HasSlug;
    // use HasTagTrait;
    use HasTimestamps;
    use PreparesSearch; // non so se funziona, credo meglio HasProfileTrait
    use HasTags;
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
     * @var array<string, string>
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
