<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\Factories\EventFactory;
use Modules\Geo\Models\Place;
use Modules\Geo\Models\Traits\HasPlaceTrait;

//----- models -----

/**
 * Modules\Blog\Models\Event.
 *
 * @property int                                                                  $id
 * @property string|null                                                          $bio
 * @property \Illuminate\Support\Carbon|null                                      $created_at
 * @property \Illuminate\Support\Carbon|null                                      $updated_at
 * @property \datetime|null                                                       $date_start
 * @property \datetime|null                                                       $date_end
 * @property string|null                                                          $created_by
 * @property string|null                                                          $updated_by
 * @property string|null                                                          $deleted_by
 * @property Place|null                                                           $address
 * @property string|null                                                          $guid
 * @property string|null                                                          $image_src
 * @property string|null                                                          $lang
 * @property string|null                                                          $post_type
 * @property string|null                                                          $subtitle
 * @property string|null                                                          $title
 * @property string|null                                                          $txt
 * @property string|null                                                          $user_handle
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[] $images
 * @property int|null                                                             $images_count
 * @property \Modules\Lang\Models\Post|null                                       $post
 * @property \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property int|null                                                             $posts_count
 * @property mixed                                                                $url
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
 * @method static \Modules\Blog\Database\Factories\EventFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDateEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDeletedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 * @mixin IdeHelperEvent
 */
class Event extends BaseModelLang {
    use HasFactory;
    use HasPlaceTrait;

    /**
     * @var string[]
     */
    protected $fillable = ['id', 'date_start', 'date_end'/*,'formatted_address'*/];

    /**
     * @var string[]
     */
    public array $fillableRelationship = ['address'];

    /**
     * @var array
     */
    protected $appends = [/*'formatted_address'*/];

    /**
     * @var string[]
     */
    protected $dates = ['date_start', 'date_end', 'created_at', 'updated_at'];

    /**
     * @var string[]
     */
    /*
    protected $casts = [
        'date_start' => 'datetime:d/m/Y H:i',
        'date_end' => 'datetime:d/m/Y H:i',
    ];
    */

    protected $casts = [
        'date_start' => 'datetime:Y-m-d\TH:i',
        'date_end' => 'datetime:Y-m-d\TH:i',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory() {
        return EventFactory::new();
    }

    //----- relationship -----

    /* spostato in HasPlaceTrait
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
     
>>>>>>> 9f39ec2 (first)
=======
     
>>>>>>> ffb8c7b (first)
=======
     
>>>>>>> 5bff340 (first)
=======
     
>>>>>>> eed9a9f (first)
=======

>>>>>>> 7936983 (up)
    public function address() {// fare HasPlaceTrait
        $row = $this->morphOne(Place::class, 'post'); //->withDefault('aaaa')

        return $row;
    }
    */

    //----- mutators -----

    /*
     * @param mixed $value
     */
    /*
    public function setDateStartAttribute($value): void {
        $date_format = 'd/m/Y H:i';
        if (! is_object($value)) {
            $this->attributes['date_start'] = Carbon::createFromFormat($date_format, $value);
        }
    }
    */
    /*
     * @param mixed $value
     */
    /*
    public function setDateEndAttribute($value): void {
        $date_format = 'd/m/Y H:i';
        if (! is_object($value)) {
            $this->attributes['date_end'] = Carbon::createFromFormat($date_format, $value);
        }
    }
    */
}//end model
