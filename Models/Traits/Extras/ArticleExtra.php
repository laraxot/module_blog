<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits\Extras;

use Illuminate\Support\Str;

/**
 * Undocumented trait.
 */
trait ArticleExtra {
    public function title(): ?string {
        return $this->title;
    }

    public function body(): ?string {
        //return $this->body;
        return $this->txt;
    }

    public function excerpt(int $limit = 100): string {
        return Str::limit(strip_tags(''.md_to_html($this->body())), $limit);
    }

    public function heroImage($width = 400, $height = 300): string {
        if ($this->hero_image) {
            return "https://source.unsplash.com/{$this->hero_image}/{$width}x{$height}";
        }

        return asset('images/default-background.svg');
    }

    public function originalUrl(): ?string {
        return $this->original_url;
    }

    public function canonicalUrl(): string {
        //return $this->originalUrl() ?: route('articles.show', $this->slug);
        if (null != $this->originalUrl()) {
            return $this->originalUrl();
        }

        return route('containers.show', ['lang' => app()->getLocale(), 'container0' => 'articles', 'item0' => $this->guid]);
    }

    public function submittedAt(): ?Carbon {
        return $this->submitted_at;
    }

    public function approvedAt(): ?Carbon {
        return $this->approved_at;
    }

    public function isSubmitted(): bool {
        return ! $this->isNotSubmitted();
    }

    public function isNotSubmitted(): bool {
        return null === $this->submitted_at;
    }

    public function isApproved(): bool {
        return ! $this->isNotApproved();
    }

    public function isNotApproved(): bool {
        return null === $this->approved_at;
    }

    public function isPublished(): bool {
        return ! $this->isNotPublished();
    }

    public function isNotPublished(): bool {
        return $this->isNotSubmitted() || $this->isNotApproved();
    }

    public function isPinned(): bool {
        return (bool) $this->is_pinned;
    }

    public function isNotShared(): bool {
        return null === $this->shared_at;
    }

    public function isShared(): bool {
        return ! $this->isNotShared();
    }

    public function isAwaitingApproval(): bool {
        return $this->isSubmitted() && $this->isNotApproved();
    }

    public function isNotAwaitingApproval(): bool {
        return ! $this->isAwaitingApproval();
    }

    public function readTime() {
        $minutes = round(str_word_count(''.$this->body()) / 200);

        return 0 == $minutes ? 1 : $minutes;
    }

    public function shouldBeSearchable() {
        return $this->isPublished();
    }

    public function toSearchableArray(): array {
        return [
            'id' => $this->id(),
            'title' => $this->title(),
            'body' => $this->body(),
            'slug' => $this->slug(),
        ];
    }

    public function splitBody($value) {
        return $this->split($value);
    }

    public function markAsShared() {
        $this->update([
            'shared_at' => now(),
        ]);
    }

    public static function nextForSharing(): ?self {
        return self::notShared()
        ->published()
        ->orderBy('submitted_at', 'asc')
        ->first();
    }

    public function isDeclined(): bool {
        return ! $this->isNotDeclined();
    }

    public function isNotDeclined(): bool {
        return null === $this->declined_at;
    }

    public function isUpdated(): bool {
        return $this->updated_at->gt($this->created_at);
    }
}
