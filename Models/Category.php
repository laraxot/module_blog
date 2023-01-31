<?php

/**
 * composer non lo installava..
 *
 * @see https://github.com/rinvex/laravel-categories/blob/master/src/Models/Category.php
 */

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Rinvex\Support\Traits\HasSlug;
// use Rinvex\Support\Traits\HasTranslations;
use Kalnoy\Nestedset\NestedSet;
// use Rinvex\Support\Traits\ValidatingTrait;
use Kalnoy\Nestedset\NodeTrait;
use Modules\Xot\Services\RouteService;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Category extends Model {
    use HasFactory;
    use HasSlug;
    use HasTranslations;
    use NodeTrait;
    use SoftDeletes;
    // use ValidatingTrait;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'slug',
        'name',
        'description',
        NestedSet::LFT,
        NestedSet::RGT,
        NestedSet::PARENT_ID,
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'slug' => 'string',
        NestedSet::LFT => 'integer',
        NestedSet::RGT => 'integer',
        NestedSet::PARENT_ID => 'integer',
        'deleted_at' => 'datetime',
    ];

    /**
     * {@inheritdoc}
     */
    protected $observables = [
        'validating',
        'validated',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    public $translatable = [
        'name',
        'description',
    ];

    /**
     * The default rules that the model will validate against.
     *
     * @var array
     */
    protected $rules = [];

    /**
     * Whether the model should throw a
     * ValidationException if it fails validation.
     *
     * @var bool
     */
    protected $throwValidationExceptions = true;

    /*
     * Create a new Eloquent model instance.

    public function __construct(array $attributes = []) {
        $this->setTable(config('rinvex.categories.tables.categories'));
        $this->mergeRules([
            'name' => 'required|string|strip_tags|max:150',
            'description' => 'nullable|string|max:32768',
            'slug' => 'required|alpha_dash|max:150|unique:'.config('rinvex.categories.tables.categories').',slug',
            NestedSet::LFT => 'sometimes|required|integer',
            NestedSet::RGT => 'sometimes|required|integer',
            NestedSet::PARENT_ID => 'nullable|integer',
        ]);

        parent::__construct($attributes);
    }
    */

    /**
     * Get all attached models of the given class to the category.
     */
    public function entries(string $class): MorphToMany {
        // return $this->morphedByMany($class, 'categorizable', config('rinvex.categories.tables.categorizables'), 'category_id', 'categorizable_id', 'id', 'id');
        return $this->morphedByMany($class, 'categorizable', 'categorizable', 'category_id', 'categorizable_id', 'id', 'id');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions {
        return SlugOptions::create()
                          // ->doNotGenerateSlugsOnUpdate() // ?
                          ->generateSlugsFrom('name')
                          ->saveSlugsTo('slug');
    }

    public function scopeOfType(Builder $query, string $type): Builder {
    public function scopeOfType(Builder $query, string $type): Builder {
        return $query->whereRelation('categorizables', 'categorizable_type', $type);
        /*
        return $query->whereHas('categorizables',function($q) use($type){
            $q->where('categorizable_type',$type);
        });
        */
    }

    public function categorizables(): HasMany {
        return $this->hasMany(Categorizable::class, 'category_id');
    }

    public function articles(): MorphToMany {
        return $this->morphedByMany(self::class, 'categorizable', 'categorizable', 'category_id', 'categorizable_id', 'id', 'id');
    }

    /**
     * @return string
     */
    public function getRouteKeyName() {
        return RouteService::inAdmin() ? 'id' : 'slug';
    }
}