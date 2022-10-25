<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

/**
 * Modules\Blog\Models\Like.
 *
 * @property int|null    $id
 * @property string|null $name
 * @property int|null    $user_id
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Like newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like query()
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereUserId($value)
 *
 * @mixin \Eloquent
 * @mixin IdeHelperLike
 */
final class Like extends Model {
    use HasFactory;
    use Sushi; // sushi solo per non fare ora migrazione

    protected $fillable = ['user_id'];

    protected $rows = [
        [
            'id' => 'home',
            'name' => 'New York',
            'user_id' => 1,
        ],
    ];
}
