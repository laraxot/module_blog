<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// ----- traits ----
use Modules\Blog\Models\Traits\HasAuthor;
use Modules\Blog\Models\Traits\HasCategory;
// use Modules\Blog\Models\Traits\HasTags;
// use Modules\Blog\Models\Traits\HasSlug;
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
use Modules\Blog\Models\Traits\HasTimestamps;
// use Modules\Blog\Models\Traits\PreparesSearch;
use Spatie\ModelStatus\HasStatuses;
use Spatie\Tags\HasTags; // spatie tags

class Article extends BaseModelLang implements HasLikeContract {
    use HasAuthor;
    use HasCategory;
    use HasLikes;
    // use HasProfileTrait;
    // use HasSlug;
    // use HasSlug;
    // use HasSlug;
    use HasStatuses; // non so se funziona, credo meglio HasProfileTrait
    use HasTags;
    // use HasTagTrait;
    use HasTimestamps;
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