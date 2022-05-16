<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Model;
// //use Laravel\Scout\Searchable;
// ---------- traits

use Modules\Lang\Models\Traits\LinkedTrait;
use Modules\Xot\Traits\Updater;

/**
 * Modules\Blog\Models\XotBaseModel.
 *
 * @property \Modules\LU\Models\User|null   $user
 * @property \Modules\Lang\Models\Post|null $post
 */
abstract class XotBaseModel extends Model {
    use LinkedTrait;
    // use Searchable;
    use Updater;
/**
 * Indicates whether attributes are snake cased on arrays.
 *
 * @see  https://laravel-news.com/6-eloquent-secrets
* 
 * @var bool
 */
// public static $snakeAttributes = true;

protected $perPage = 30;

    // -------------
    /*
    protected $lang;
    protected $post;
    */
}
