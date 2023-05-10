<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// ----- traits ----

/**
 * Modules\Blog\Models\Image.
 *
 * @method static \Modules\Blog\Database\Factories\ImageFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Image   newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image   newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image   query()
 *
 * @mixin \Eloquent
 */
class Image extends BaseModel   // BaseModelLang?
{/**
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
