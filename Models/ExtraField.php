<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Modules\Blog\Models\Traits\HasCategory;

/**
 * Modules\Blog\Models\ExtraField.
 *
 * @property int                                                          $id
 * @property string                                                       $name
 * @property \Illuminate\Support\Carbon|null                              $created_at
 * @property \Illuminate\Support\Carbon|null                              $updated_at
 * @property string                                                       $type
 * @property string|null                                                  $rules
 * @property string|null                                                  $created_by
 * @property string|null                                                  $updated_by
 * @property \Kalnoy\Nestedset\Collection|\Modules\Blog\Models\Category[] $categories
 * @property int|null                                                     $categories_count
 *
 * @method static \Modules\Blog\Database\Factories\ExtraFieldFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   query()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withAllCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withAnyCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withCategories($categories)
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withoutAnyCategories()
 * @method static \Illuminate\Database\Eloquent\Builder|ExtraField   withoutCategories($categories)
 *
 * @mixin \Eloquent
 */
class ExtraField extends BaseModel {
    use HasCategory;

    protected $fillable = ['id', 'name', 'type',
        'rules', 'options', 'attributes', 'collection_name'];

    public function extraFieldGroups() {
        return $this->belongsTo(ExtraFieldGroup::class);
    }
}
