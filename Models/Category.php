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

/**
 * Modules\Blog\Models\Category.
 *
 * @property int                                                                           $id
 * @property int|null                                                                      $parent_id
 * @property string|null                                                                   $created_by
 * @property string|null                                                                   $updated_by
 * @property \Illuminate\Support\Carbon|null                                               $created_at
 * @property \Illuminate\Support\Carbon|null                                               $updated_at
 * @property string|null                                                                   $icon_src
 * @property int                                                                           $_rgt
 * @property string                                                                        $slug
 * @property array                                                                         $name
 * @property int                                                                           $_lft
 * @property array|null                                                                    $description
 * @property \Illuminate\Support\Carbon|null                                               $deleted_at
 * @property \Kalnoy\Nestedset\Collection|Category[]                                       $articles
 * @property int|null                                                                      $articles_count
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Categorizable[] $categorizables
 * @property int|null                                                                      $categorizables_count
 * @property \Kalnoy\Nestedset\Collection|Category[]                                       $children
 * @property int|null                                                                      $children_count
 * @property Category|null                                                                 $parent
 *
 * @method static \Kalnoy\Nestedset\Collection|static[]       all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     fixTree($root = null)
 * @method static \Kalnoy\Nestedset\Collection|static[]       get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     ofType(string $type)
 * @method static \Illuminate\Database\Query\Builder|Category onlyTrashed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     query()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereCreatedBy($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereDeletedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereDescription($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereIconSrc($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereName($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereNodeBetween($values, $boolean = 'and', $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereSlug($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     whereUpdatedBy($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     withDepth(string $as = 'depth')
 * @method static \Illuminate\Database\Query\Builder|Category withTrashed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category     withoutRoot()
 * @method static \Illuminate\Database\Query\Builder|Category withoutTrashed()
 *
 * @mixin \Eloquent
 *
 * @property \Kalnoy\Nestedset\Collection|Category[] $articles
 * @property int|null                                $articles_count
 */
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

<<<<<<< HEAD
<<<<<<< HEAD
    public function scopeOfType(Builder $query, string $type): Builder {
=======
    public function scopeOfType(Builder $query, string $type):Builder {
>>>>>>> 7fdf4e1 (up)
=======
    public function scopeOfType(Builder $query, string $type): Builder {
>>>>>>> 134e178 (Lint)
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
