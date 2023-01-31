<?php
/**
 * @see SPATIE
 */

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Xot\Traits\Updater;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;
use Spatie\ModelStatus\HasStatuses;
use Spatie\Tags\HasTags;

/**
 * Modules\Blog\Models\Media.
 *
 * @property int                                                                   $id
 * @property string                                                                $model_type
 * @property int                                                                   $model_id
 * @property string|null                                                           $uuid
 * @property string                                                                $collection_name
 * @property string                                                                $name
 * @property string                                                                $file_name
 * @property string|null                                                           $mime_type
 * @property string                                                                $disk
 * @property string|null                                                           $conversions_disk
 * @property int                                                                   $size
 * @property array                                                                 $manipulations
 * @property array                                                                 $custom_properties
 * @property array                                                                 $generated_conversions
 * @property array                                                                 $responsive_images
 * @property int|null                                                              $order_column
 * @property \Illuminate\Support\Carbon|null                                       $created_at
 * @property \Illuminate\Support\Carbon|null                                       $updated_at
 * @property string|null                                                           $created_by
 * @property string|null                                                           $updated_by
 * @property string                                                                $status
 * @property \Illuminate\Database\Eloquent\Model|\Eloquent                         $model
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Tag\Models\Tag[]    $tags
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\ModelStatus\Status[] $statuses
 * @property int|null                                                              $statuses_count
 * @property int|null                                                              $tags_count
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       currentStatus(...$names)
 * @method static \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|static[] get($columns = ['*'])
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9e2a502 (Lint)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       newQuery()
 * @method static Builder|Media                                                                     ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereConversionsDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereGeneratedConversions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereManipulations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereResponsiveImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAnyTagsOfAnyType($tags)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       newQuery()
 * @method static Builder|Media                                                                     ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereConversionsDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereGeneratedConversions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereManipulations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereResponsiveImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAnyTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       newQuery()
 * @method static Builder|Media                                                                     ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereConversionsDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereGeneratedConversions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereManipulations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereResponsiveImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media                                       withAnyTagsOfAnyType($tags)
>>>>>>> 47ce820f83a6b78c9e67117ec7a92c012d45978e
=======
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static Builder|Media ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media otherCurrentStatus(...$names)
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCollectionName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereConversionsDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCustomProperties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereGeneratedConversions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereManipulations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereMimeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereOrderColumn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereResponsiveImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media withAllTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media withAllTagsOfAnyType($tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Media withAnyTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Media withAnyTagsOfAnyType($tags)
>>>>>>> 378fec2 (up)
=======
 *
>>>>>>> 9e2a502 (Lint)
=======
>>>>>>> b2584c5 (rebase)
=======
 *
>>>>>>> 0401392 (rebase)
=======
>>>>>>> e585fd6 (rebase)
 * @mixin \Eloquent
 * @property int $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media withoutTags(\ArrayAccess|\Spatie\Tags\Tag|array|string $tags, ?string $type = null)
 */
class Media extends BaseMedia {
    // use Searchable;
    // use Cachable;
    use HasFactory;
    // spatie tags
    use HasStatuses;
    use HasTags;
    use Updater; // spatie status
    // use LinkedTrait;
    /**
     * Indicates whether attributes are snake cased on arrays.
     *
     * @see  https://laravel-news.com/6-eloquent-secrets
     *
     * @var bool
     */
    public static $snakeAttributes = true;

    protected $perPage = 30;

    protected $fillable = [
        'id', 'model_type', 'model_id', 'uuid', 'collection_name', 'name',
        'file_name', 'mime_type', 'disk', 'conversions_disk', 'size',
        'manipulations',
        'custom_properties', 'generated_conversions', 'responsive_images',
        'order_column', 'user_id',
        'time_from', 'time_to',
        'created_at', 'updated_at', 'created_by', 'updated_by',
        'title', 'subtitle', 'guid',
    ];

    protected $appends = [
        'original_url', 'preview_url',
        // 'title',
        // 'subtitle',
    ];

    // protected $with = ['tags:id,name'];
    protected $with = ['tags'];

    protected $table = 'spatie_images'; // tampone
    // protected $table = 'media'; // cosi' vuole spatie

    /*
     * Undocumented function.
     */
    // public function getVideoUrlAttribute(?string $value): ?string {
    //    return url('/streamsnip/'.$this->id);
    // }
}
