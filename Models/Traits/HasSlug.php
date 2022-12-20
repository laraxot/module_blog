<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

use Illuminate\Support\Str;

trait HasSlug {
    public function slug(): ?string {
        // return $this->slug;
        return $this->guid;
    }

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function setSlugAttribute(string $slug) {
        $this->attributes['slug'] = $this->generateUniqueSlug($slug);
    }

    public static function findBySlug(string $slug): self {
        return static::query()
            ->where('slug', $slug)->firstOrFail();
    }

    private function generateUniqueSlug(string $value): string {
        $slug = $originalSlug = Str::slug($value) ?: Str::random(5);
        $counter = 0;

        while ($this->slugExists($slug, $this->exists ? $this->getKey() : null)) {
            ++$counter;
            $slug = $originalSlug.'-'.$counter;
        }

        return $slug;
    }

    private function slugExists(string $slug, int $ignoreId = null): bool {
        $query = $this->query()->where('slug', $slug);

        if ($ignoreId) {
            $query->where('id', '!=', $ignoreId);
        }

        return $query->exists();
    }
}
