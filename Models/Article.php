<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// ----- traits ----
use Modules\Blog\Models\Traits\HasAuthor;
use Modules\Blog\Models\Traits\HasCategory;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
// use Modules\Blog\Models\Traits\HasTags;
<<<<<<< HEAD
// use Modules\Blog\Models\Traits\HasSlug;
<<<<<<< HEAD
// use Modules\Blog\Models\Traits\HasSlug;
// use Spatie\Sluggable\HasSlug;
// use Spatie\Sluggable\HasSlug;
use Modules\Blog\Models\Traits\HasSlug;
use Modules\Blog\Models\Traits\HasTimestamps;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\HasTags;
// use Modules\Blog\Models\Traits\HasSlug;
// use Spatie\Sluggable\HasSlug;
// use Modules\Blog\Models\Traits\HasTimestamps;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\HasSlug;
// use Modules\Blog\Models\Traits\HasSlug;
// use Spatie\Sluggable\HasSlug;
// use Modules\Blog\Models\Traits\HasTimestamps;
// use Modules\Blog\Models\Traits\PreparesSearch;
// use Modules\Blog\Models\Traits\PreparesSearch;
=======
=======
=======
>>>>>>> f930b9f (rebase)
use Modules\Blog\Models\Traits\HasSlug;
<<<<<<< HEAD
>>>>>>> c1a0d4d (up)
// use Spatie\Sluggable\HasSlug;
=======
//use Spatie\Sluggable\HasSlug;
>>>>>>> 3757d50 (up)
<<<<<<< HEAD
>>>>>>> d372a0c (rebase)
=======
=======
>>>>>>> 313176e (rebase)
=======
use Modules\Blog\Models\Traits\HasSlug;
>>>>>>> 26c4c62 (.)
>>>>>>> 0bf2d02 (rebase)
use Modules\Blog\Models\Traits\HasTimestamps;
<<<<<<< HEAD
<<<<<<< HEAD
// use Modules\Blog\Models\Traits\PreparesSearch;
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
//use Modules\Blog\Models\Traits\PreparesSearch;
>>>>>>> f4041d1 (up)
=======
// use Modules\Blog\Models\Traits\PreparesSearch;
>>>>>>> a822353 (.)
=======
// use Modules\Blog\Models\Traits\HasTags;
// use Modules\Blog\Models\Traits\HasSlug;
// use Spatie\Sluggable\HasSlug;
use Modules\Blog\Models\Traits\HasTimestamps;
<<<<<<< HEAD
//use Modules\Blog\Models\Traits\PreparesSearch;
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
=======
=======
// use Modules\Blog\Models\Traits\PreparesSearch;
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
use Modules\LU\Models\Traits\HasProfileTrait;
use Modules\Rating\Contracts\HasLikeContract;
// use Modules\Tag\Models\Traits\HasTagTrait;
use Modules\Rating\Models\Traits\HasLikes;
use Modules\Rating\Models\Traits\RatingTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 94cba72 (rebase)
=======
=======
>>>>>>> 31101c4 (rebase)
=======
>>>>>>> c2c2b79 (rebase)
<<<<<<< HEAD
=======
use Modules\UI\Contracts\HasLikeContract;
>>>>>>> 8dd23ec (up)
<<<<<<< HEAD
>>>>>>> f8b22e7 (rebase)
=======
=======
use Modules\Rating\Contracts\HasLikeContract;
>>>>>>> a71ed99 (up)
<<<<<<< HEAD
>>>>>>> 31101c4 (rebase)
=======
=======
>>>>>>> d7cf20b (Lint)
>>>>>>> c2c2b79 (rebase)
use Spatie\ModelStatus\HasStatuses;
use Spatie\Tags\HasTags; // spatie tags

<<<<<<< HEAD
=======
/**
 * Modules\Blog\Models\Article.
 *
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8213e79 (Lint)
 * @property int                                                                      $id
 * @property string|null                                                              $article_type
 * @property \Illuminate\Support\Carbon|null                                          $published_at
 * @property string|null                                                              $updated_by
 * @property string|null                                                              $created_by
 * @property \Illuminate\Support\Carbon|null                                          $created_at
 * @property \Illuminate\Support\Carbon|null                                          $updated_at
 * @property string|null                                                              $parent_type
 * @property int|null                                                                 $parent_id
 * @property int|null                                                                 $pos
 * @property int|null                                                                 $user_id
 * @property int|null                                                                 $is_featured
 * @property float|null                                                               $ratings_avg
 * @property int|null                                                                 $ratings_count
 * @property int|null                                                                 $status_id
 * @property int                                                                      $show_on_homepage
 * @property int|null                                                                 $read_time
 * @property int|null                                                                 $author_id
 * @property int                                                                      $is_pinned
 * @property \Illuminate\Support\Carbon|null                                          $submitted_at
 * @property \Illuminate\Support\Carbon|null                                          $approved_at
 * @property \Illuminate\Support\Carbon|null                                          $shared_at
 * @property \Illuminate\Support\Carbon|null                                          $declined_at
 * @property string|null                                                              $original_url
 * @property int|null                                                                 $series_id
 * @property \Illuminate\Database\Eloquent\Collection|Article[]                       $articles
 * @property int|null                                                                 $articles_count
 * @property \Modules\LU\Models\Profile|null                                          $author
 * @property \Modules\LU\Models\User|null                                             $authorRelation
 * @property \Kalnoy\Nestedset\Collection|\Modules\Blog\Models\Category[]             $categories
 * @property int|null                                                                 $categories_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Comment[]  $comments
 * @property int|null                                                                 $comments_count
 * @property string|null                                                              $guid
 * @property string|null                                                              $image_src
 * @property string|null                                                              $lang
 * @property \Illuminate\Support\Collection                                           $my_rating
 * @property string|null                                                              $post_type
 * @property string                                                                   $status
 * @property string|null                                                              $subtitle
 * @property string|null                                                              $title
 * @property string|null                                                              $txt
 * @property string|null                                                              $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Like[]   $likesRelation
 * @property int|null                                                                 $likes_relation_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $myRatings
 * @property int|null                                                                 $my_ratings_count
 * @property \Modules\Lang\Models\Post|null                                           $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[]     $posts
 * @property int|null                                                                 $posts_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratingObjectives
 * @property int|null                                                                 $rating_objectives_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratings
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Tag\Models\Tag[]       $tags
 * @property mixed                                                                    $url
 * @property \Illuminate\Database\Eloquent\Collection|Article[]                       $sons
 * @property int|null                                                                 $sons_count
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\ModelStatus\Status[]    $statuses
 * @property int|null                                                                 $statuses_count
 * @property int|null                                                                 $tags_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Article       approved()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       article($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       author($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       awaitingApproval()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       currentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       differentFromCurrentArticle($current_article)
 * @method static \Modules\Blog\Database\Factories\ArticleFactory     factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       forTag(string $tag)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       notApproved()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       notPinned()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       notPublished()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       notShared()
<<<<<<< HEAD
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       pinned()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       popular()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       published()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       publishedUntilToday()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       recent()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       search($searching)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       shared()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       showHomepage()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       submitted()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       tag($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       trending()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereApprovedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereArticleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereDeclinedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereIsPinned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereOriginalUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereParentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereRatingsAvg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereRatingsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereReadTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereSeriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereSharedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereShowOnHomepage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAllCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAnyCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withCategories($categories)
=======
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
 * @property int|null $user_id
 * @property int|null $is_featured
 * @property float|null $ratings_avg
 * @property-read int|null $ratings_count
 * @property int|null $status_id
 * @property int $show_on_homepage
 * @property int|null $read_time
 * @property int|null $author_id
 * @property int $is_pinned
 * @property \Illuminate\Support\Carbon|null $submitted_at
 * @property \Illuminate\Support\Carbon|null $approved_at
 * @property \Illuminate\Support\Carbon|null $shared_at
 * @property \Illuminate\Support\Carbon|null $declined_at
 * @property string|null $original_url
 * @property int|null $series_id
 * @property-read \Illuminate\Database\Eloquent\Collection|Article[] $articles
 * @property-read int|null $articles_count
 * @property-read \Modules\LU\Models\Profile|null $author
 * @property-read \Modules\LU\Models\User|null $authorRelation
 * @property \Kalnoy\Nestedset\Collection|\Modules\Blog\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read \Illuminate\Support\Collection $my_rating
 * @property-read string|null $post_type
 * @property-read string $status
 * @property string|null $subtitle
 * @property string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Like[] $likesRelation
 * @property-read int|null $likes_relation_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $myRatings
 * @property-read int|null $my_ratings_count
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratingObjectives
 * @property-read int|null $rating_objectives_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Rating\Models\Rating[] $ratings
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Tag\Models\Tag[] $tags
 * @property-write mixed $url
 * @property-read \Illuminate\Database\Eloquent\Collection|Article[] $sons
 * @property-read int|null $sons_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\ModelStatus\Status[] $statuses
 * @property-read int|null $statuses_count
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Article approved()
 * @method static \Illuminate\Database\Eloquent\Builder|Article article($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article author($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article awaitingApproval()
 * @method static \Illuminate\Database\Eloquent\Builder|Article currentStatus(...$names)
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
 * @method static \Illuminate\Database\Eloquent\Builder|Article otherCurrentStatus(...$names)
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
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeclinedAt($value)
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
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSharedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereShowOnHomepage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAllCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAnyCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article withCategories($categories)
>>>>>>> bc6d311 (up)
=======
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       pinned()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       popular()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       published()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       publishedUntilToday()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       recent()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       search($searching)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       shared()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       showHomepage()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       submitted()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       tag($id)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       trending()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereApprovedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereArticleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereDeclinedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereIsPinned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereOriginalUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereParentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       wherePos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereRatingsAvg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereRatingsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereReadTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereSeriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereSharedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereShowOnHomepage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereSubmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAllCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAnyCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withCategories($categories)
>>>>>>> 8213e79 (Lint)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withRating()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withoutAnyCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|Article       withoutCategories($categories)
 *
 * @mixin \Eloquent
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 378fec2 (up)
class Article extends BaseModelLang implements HasLikeContract {
=======
class Article extends BaseModelLang implements HasLikeContract
{
>>>>>>> 71f0636 (up)
=======
class Article extends BaseModelLang implements HasLikeContract {
>>>>>>> e0d1f4b (Lint)
=======
class Article extends BaseModelLang implements HasLikeContract
{
>>>>>>> de5af69 (up)
=======
class Article extends BaseModelLang implements HasLikeContract {
>>>>>>> c24d571 (Lint)
=======
class Article extends BaseModelLang implements HasLikeContract
{
>>>>>>> 0bf2d02 (rebase)
=======
class Article extends BaseModelLang implements HasLikeContract {
>>>>>>> aef633b (rebase)
=======
class Article extends BaseModelLang implements HasLikeContract
{
>>>>>>> 1316785 (rebase)
=======
class Article extends BaseModelLang implements HasLikeContract {
>>>>>>> 360b73d (rebase)
=======
class Article extends BaseModelLang implements HasLikeContract
{
>>>>>>> 8dbdb6a (rebase)
    use HasAuthor;
    use HasCategory;
    use HasLikes;
    // use HasProfileTrait;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    // use HasSlug;
<<<<<<< HEAD
    // use HasSlug;
    // use HasSlug;
=======
=======
    //use HasSlug;
>>>>>>> f4041d1 (up)
<<<<<<< HEAD
>>>>>>> 94cba72 (rebase)
=======
=======
    // use HasSlug;
>>>>>>> a822353 (.)
<<<<<<< HEAD
>>>>>>> e8fc058 (rebase)
=======
=======
=======
>>>>>>> af0dac7 (rebase)
    // use HasSlug;
=======
    //use HasSlug;
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
<<<<<<< HEAD
>>>>>>> f051075 (rebase)
=======
=======
=======
    // use HasSlug;
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
>>>>>>> 307d952 (rebase)
    use HasStatuses; // non so se funziona, credo meglio HasProfileTrait
    use HasTags;
    // use HasTagTrait;
    use HasTimestamps;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> e8fc058 (rebase)
=======
>>>>>>> f051075 (rebase)
=======
>>>>>>> 307d952 (rebase)
<<<<<<< HEAD
    // use PreparesSearch;
=======
    //use PreparesSearch;
>>>>>>> f4041d1 (up)
<<<<<<< HEAD
>>>>>>> 94cba72 (rebase)
=======
=======
    // use PreparesSearch;
>>>>>>> a822353 (.)
<<<<<<< HEAD
>>>>>>> e8fc058 (rebase)
=======
=======
=======
>>>>>>> af0dac7 (rebase)
    // use PreparesSearch;
=======
    //use PreparesSearch;
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
<<<<<<< HEAD
>>>>>>> f051075 (rebase)
=======
=======
=======
    // use PreparesSearch;
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
>>>>>>> 307d952 (rebase)
    use RatingTrait;
    use Traits\Extras\ArticleExtra;
    use Traits\Mutators\ArticleMutator;
    use Traits\Relationships\ArticleRelationship;
    use Traits\Scopes\ArticleScope;

    /**
     * @var array<string>
     */
    protected $fillable = [
        'id', 'pos', 'article_type', 'published_at',
        'parent_id', 'parent_type', 'is_featured', 'user_id',
        'status_id', 'is_pinned', 'author_id',
    ];
    /**
     * @var array<string>
     */
    protected $appends = ['title', 'txt'];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        // 'date_start' => 'datetime:Y-m-d\TH:i',
        // 'date_end' => 'datetime:Y-m-d\TH:i',
    ];

    /**
     * @var string[]
     */
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
        'submitted_at',
        'approved_at',
        'shared_at',
        'declined_at',
    ];

    /* https://itnext.io/7-things-you-need-to-know-to-get-the-most-out-of-your-laravel-model-4f915acbb47c */
}// end model
