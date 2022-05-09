<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits\Scopes;

use Illuminate\Database\Eloquent\Builder;

/**
 * Undocumented trait.
 */
trait ArticleScope {
    /**
     * Scope a query to only include articles different from current article.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDifferentFromCurrentArticle($query, $current_article) {
        return $query->where('id', '!=', $current_article);
    }

    /**
     * Scope a query to only include articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeArticle($query, $id) {
        return $query->where('author_id', $id);
    }

    /**
     * Scope a query to only include show on homepage articles.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeShowHomepage($query) {
        return $query->where('show_on_homepage', 1);
    }

    /**
     * Scope a query to only include posted articles until today.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePublishedUntilToday($query) {
        //return $query->whereDate('publish_date', '<=', Carbon::today()->toDateString());
        // c'e' update_at created_at .. percio' published_at
        return $query->whereDate('published_at', '<=', Carbon::today()->toDateString());
    }

    /**
     * Scope a query to only include articles with a specified category.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $id -> The id of the category
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCategory($query, $id) {
        return $query->whereHas('category', function ($q) use ($id) {
            $q->where('id', $id);
        });
    }

    /**
     * Scope a query to only include articles that belongs to an author.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $id -> The id of the author
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAuthor($query, $id) {
        return $query->whereHas('author', function ($q) use ($id) {
            $q->where('id', $id);
        });
    }

    /**
     * Scope a query to only include articles with a specified tag.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $id -> The id of the tag
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTag($query, $id) {
        return $query->whereHas('tags', function ($q) use ($id) {
            $q->where('id', $id);
        });
    }

    /**
     * Scope a query to only include articles which contains searching words.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param $searching -> The searching words
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearch($query, $searching) {
        return $query->where('title', 'LIKE', "%{$searching}%")
                     ->orWhere('content', 'LIKE', "%{$searching}%")
                     ->orWhere('excerpt', 'LIKE', "%{$searching}%");
    }

    public function scopeSubmitted(Builder $query): Builder {
        return $query->whereNotNull('submitted_at');
    }

    public function scopeApproved(Builder $query): Builder {
        return $query->whereNotNull('approved_at');
    }

    public function scopeNotApproved(Builder $query): Builder {
        return $query->whereNull('approved_at');
    }

    public function scopeAwaitingApproval(Builder $query): Builder {
        return $query->submitted()
        ->notApproved();
    }

    public function scopePublished(Builder $query): Builder {
        return $query->submitted()
        ->approved();
    }

    /**
     * Scope a query to only include published articles.
     */
    //public function scopePublished($query) {
    //return $query->where('status', 'published');
    //-- meglio intero
    //    return $query->where('status_id', 1);
    //}

    public function scopeNotPublished(Builder $query): Builder {
        return $query->where(function ($query) {
            $query->whereNull('submitted_at')
            ->orWhereNull('approved_at');
        });
    }

    public function scopePinned(Builder $query): Builder {
        return $query->where('is_pinned', true);
    }

    public function scopeNotPinned(Builder $query): Builder {
        return $query->where('is_pinned', false);
    }

    public function scopeShared(Builder $query): Builder {
        return $query->whereNotNull('shared_at');
    }

    public function scopeNotShared(Builder $query): Builder {
        return $query->whereNull('shared_at');
    }

    public function scopeForTag(Builder $query, string $tag): Builder {
        return $query->whereHas('tagsRelation', function ($query) use ($tag) {
            $query->where('tags.slug', $tag);
        });
    }

    public function scopeRecent(Builder $query): Builder {
        return $query->orderBy('is_pinned', 'desc')
        ->orderBy('submitted_at', 'desc');
    }

    public function scopePopular(Builder $query): Builder {
        return $query->withCount('likesRelation')
        ->orderBy('likes_relation_count', 'desc')
        ->orderBy('submitted_at', 'desc');
    }

    public function scopeTrending(Builder $query): Builder {
        return $query->withCount(['likesRelation' => function ($query) {
            $query->where('created_at', '>=', now()->subWeek());
        }])
        ->orderBy('likes_relation_count', 'desc')
        ->orderBy('submitted_at', 'desc');
    }
}
