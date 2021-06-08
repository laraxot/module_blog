<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Blog\Database\Factories\EventFactory;

//----- models -----

class Event extends BaseModelLang {
    use HasFactory;

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function address() {
        $row = $this->morphOne(Place::class, 'post'); //->withDefault('aaaa')

        return $row;
    }

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