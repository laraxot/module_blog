<<<<<<< HEAD
<?php

namespace Modules\Blog\Models;

//----- traits ----

//------services---------

//--- models ---

/**
 * Modules\Blog\Models\Sitemap
 *
 * @property int $id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Sitemap extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
=======
<?php

namespace Modules\Blog\Models;

//----- traits ----

//------services---------

//--- models ---

/**
 * Modules\Blog\Models\Sitemap
 *
 * @property int $id
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap query()
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Sitemap whereUpdatedBy($value)
 * @mixin \Eloquent
 */
class Sitemap extends BaseModel
{
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'created_by', 'updated_by', 'created_at', 'updated_at'];
}
>>>>>>> b665d0938279a050d707ca03721252dde228daf1
