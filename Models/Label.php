<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Label.
 *
 * @method static \Modules\Blog\Database\Factories\LabelFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Label   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Label   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Label   query()
 * @mixin \Eloquent
 * @property int                             $id
 * @property string|null                     $label_type
 * @property int|null                        $label_id
 * @property string|null                     $title
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null                     $class
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereLabelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereLabelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Label whereUpdatedBy($value)
 */
class Label extends BaseModel {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'label', 'title', 'label_id', 'label_type'];
}
