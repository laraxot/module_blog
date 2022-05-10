<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
// //use Laravel\Scout\Searchable;
use Modules\Xot\Traits\Updater;

/**
 * Class BasePivot.
 */
abstract class BasePivot extends Pivot {
    use Updater;
    // use Searchable;
    protected $connection = 'blog';

    /**
     * @var string
     */
    // protected $connection = 'liveuser_general'; // this will use the specified database conneciton

    /**
     * @var array
     */
    protected $appends = [];

    /**
     * @var array
     */
    protected $casts = [];

    /**
     * @var string[]
     */
    protected $dates = ['created_at', 'updated_at'];

    // protected $primaryKey = 'id';

    /**
     * @var bool
     */
    public $incrementing = true;
}
