<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// ----- traits ----

/**
 * Modules\Blog\Models\Image.
 *
 * @property int                             $id
 * @property string|null                     $post_type
 * @property int|null                        $post_id
 * @property string                          $src
 * @property int|null                        $height
 * @property int|null                        $width
 * @property string|null                     $src_out
 * @property int|null                        $user_id
 * @property string|null                     $note
 * @property string|null                     $created_by
 * @property string|null                     $updated_by
 * @property string|null                     $deleted_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereAuthUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image wherePostType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereSrc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereSrcOut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereWidth($value)
 * @mixin \Eloquent
 * @method static \Modules\Blog\Database\Factories\ImageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Image whereUserId($value)
 * @property int|null $auth_user_id
 * @mixin IdeHelperImage
 */
class Image extends BaseModel   // BaseModelLang?
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'post_type',
        'post_id',
        'src',
        'src_out',
        'width',
        'height',
        'user_id',
        'note',
    ];
}
