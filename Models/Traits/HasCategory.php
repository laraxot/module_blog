<?php
/**
 * @see https://github.com/rinvex/laravel-categories/blob/master/src/Traits/Categorizable.php
 */

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection as BaseCollection;
use Modules\Blog\Models\Category;

trait HasCategory {
    /**
     * Register a saved model event with the dispatcher.
     *
     * @param \Closure|string $callback
     *
     * @return void
     */
    abstract public static function saved($callback);

    /**
     * Register a deleted model event with the dispatcher.
     *
     * @param \Closure|string $callback
     *
     * @return void
     */
    abstract public static function deleted($callback);

    /**
     * Define a polymorphic many-to-many relationship.
     *
     * @param string $related
     * @param string $name
     * @param string $table
     * @param string $foreignPivotKey
     * @param string $relatedPivotKey
     * @param string $parentKey
     * @param string $relatedKey
     * @param bool   $inverse
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    abstract public function morphToMany(
        $related,
        $name,
        $table = null,
        $foreignPivotKey = null,
        $relatedPivotKey = null,
        $parentKey = null,
        $relatedKey = null,
        $inverse = false
    );

    /**
     * Get all attached categories to the model.
     */
    public function categories(): MorphToMany {
        // return $this->morphToMany(config('rinvex.categories.models.category'), 'categorizable', config('rinvex.categories.tables.categorizables'), 'categorizable_id', 'category_id')
        //            ->withTimestamps();
        return $this->morphToMany(Category::class, 'categorizable', 'categorizable', 'categorizable_id', 'category_id');
    }

    /**
     * Attach the given category(ies) to the model.
     *
     * @param int|string|array|\ArrayAccess|\Modules\Blog\Models\Category $categories
     */
    public function setCategoriesAttribute($categories): void {
        static::saved(function (self $model) use ($categories) {
            $model->syncCategories($categories);
        });
    }

    /**
     * Boot the categorizable trait for the model.
     *
     * @return void
     */
    public static function bootCategorizable() {
        static::deleted(function (self $model) {
            // Check if this is a soft delete or not by checking if `SoftDeletes::isForceDeleting` method exists
            (method_exists($model, 'isForceDeleting') && ! $model->isForceDeleting()) || $model->categories()->detach();
        });
    }

    /**
     * Scope query with all the given categories.
     *
     * @param mixed $categories
     */
    public function scopeWithAllCategories(Builder $builder, $categories): Builder {
        $categories = $this->prepareCategoryIds($categories);

        collect($categories)->each(function ($category) use ($builder) {
            $builder->whereHas('categories', function (Builder $builder) use ($category) {
                return $builder->where('id', $category);
            });
        });

        return $builder;
    }

    /**
     * Scope query with any of the given categories.
     *
     * @param mixed $categories
     */
    public function scopeWithAnyCategories(Builder $builder, $categories): Builder {
        $categories = $this->prepareCategoryIds($categories);

        return $builder->whereHas('categories', function (Builder $builder) use ($categories) {
            $builder->whereIn('id', $categories);
        });
    }

    /**
     * Scope query with any of the given categories.
     *
     * @param mixed $categories
     */
    public function scopeWithCategories(Builder $builder, $categories): Builder {
        return static::scopeWithAnyCategories($builder, $categories);
    }

    /**
     * Scope query without any of the given categories.
     *
     * @param mixed $categories
     */
    public function scopeWithoutCategories(Builder $builder, $categories): Builder {
        $categories = $this->prepareCategoryIds($categories);

        return $builder->whereDoesntHave('categories', function (Builder $builder) use ($categories) {
            $builder->whereIn('id', $categories);
        });
    }

    /**
     * Scope query without any categories.
     */
    public function scopeWithoutAnyCategories(Builder $builder): Builder {
        return $builder->doesntHave('categories');
    }

    /**
     * Determine if the model has any of the given categories.
     *
     * @param mixed $categories
     */
    public function hasCategories($categories): bool {
        $categories = $this->prepareCategoryIds($categories);

        return ! $this->categories->pluck('id')->intersect($categories)->isEmpty();
    }

    /**
     * Determine if the model has any the given categories.
     *
     * @param mixed $categories
     */
    public function hasAnyCategories($categories): bool {
        return static::hasCategories($categories);
    }

    /**
     * Determine if the model has all of the given categories.
     *
     * @param mixed $categories
     */
    public function hasAllCategories($categories): bool {
        $categories = $this->prepareCategoryIds($categories);

        return collect($categories)->diff($this->categories->pluck('id'))->isEmpty();
    }

    /**
     * Sync model categories.
     *
     * @param mixed $categories
     *
     * @return $this
     */
    public function syncCategories($categories, bool $detaching = true) {
        // Find categories
        $categories = $this->prepareCategoryIds($categories);
        // dddx(is_array( $categories));
        // Sync model categories
        if (\is_array($categories)) {
            $this->categories()->sync($categories, $detaching);
<<<<<<< HEAD
        } // else {
        // dddx($categories);
        // }
=======
        } //else {
            //dddx($categories);
        //}
>>>>>>> 1172c16 (up)

        return $this;
    }

    /**
     * Attach model categories.
     *
     * @param mixed $categories
     *
     * @return $this
     */
    public function attachCategories($categories) {
        return $this->syncCategories($categories, false);
    }

    /**
     * Detach model categories.
     *
     * @param mixed $categories
     *
     * @return $this
     */
    public function detachCategories($categories = null) {
        $categories = null !== $categories ? $this->prepareCategoryIds($categories) : null;

        // Sync model categories
        $this->categories()->detach($categories);

        return $this;
    }

    /**
     * Prepare category IDs.
     *
     * @param mixed $categories
     */
    protected function prepareCategoryIds($categories): array {
        // Convert collection to plain array
        if ($categories instanceof BaseCollection && \is_string($categories->first())) {
            $categories = $categories->toArray();
        }

        // Find categories by their ids
        if (is_numeric($categories) || (\is_array($categories) && is_numeric(Arr::first($categories)))) {
            return array_map('intval', (array) $categories);
        }

        // Find categories by their slugs
        if (\is_string($categories) || (\is_array($categories) && \is_string(Arr::first($categories)))) {
            $categories_ids = app(Category::class)
                ->whereIn('slug', (array) $categories)
                ->get()
                ->pluck('id');
            $categories_arr = Arr::wrap($categories);

            if ($categories_ids->count() !== \count($categories_arr)) {
                $categories_ids = collect([]);
                foreach ($categories_arr as $slug) {
                    $item = app(Category::class)->firstOrCreate(['slug' => $slug], ['name' => $slug]);
                    $categories_ids->push($item);
                }
            }

            $categories = $categories_ids;
        }

        if ($categories instanceof Model) {
            return [$categories->getKey()];
        }

        if ($categories instanceof Collection) {
            return $categories->modelKeys();
        }

        if ($categories instanceof BaseCollection) {
            return $categories->toArray();
        }

        return (array) $categories;
    }
}
