<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

use Illuminate\Support\Facades\Auth;
// //use Laravel\Scout\Searchable;

// ----- models------
// use Modules\Lang\Models\Post;
// use Modules\Lang\Models\PostRelatedPivot;
use Modules\Blog\Models\Privacy;

// ------ traits ---

/**
 * Trait PrivacyTrait.
 */
trait PrivacyTrait {
    /* --- da fare
    public function privacy(){
        try {
            return $this->hasMany(ProfilePrivacyChrono::class);
        } catch (\Exception $ex) {
            $databaseManager = new DatabaseManager();
            $response = $databaseManager->migrateAndSeed();
            die("DB AGGIORNATO! RIPETERE OPERAZIONE");
        }
    }
    */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function privacies() {
        /*
        $related = Privacy::class;
        $pivot = $related.'Morph';


        return $this->morphToMany($related,'post','privacy_morph')
            ->using($pivot)
                    ->withPivot($pivot_fields)
                    ->wherePivot('user_id', $user_id)
                    ->withTimestamps();
                */
        return $this->morphRelated(Privacy::class)->wherePivot('user_id', Auth::id());
    }

    /*
    public function privacies_vecia() { // controllare con linkedtrait
        $related = Privacy::class;
        if (is_string($related)) {
            $pivot = $related.'Morph';
        } else {
            $pivot = get_class($related).'Morph';
        }
        //dddx($pivot);
        $name = 'post';
        $pivot_table = with(new $pivot())->getTable();
        $pivot_fields = with(new $pivot())->getFillable();
        $foreignPivotKey = 'post_id';
        //$relatedPivotKey = 'related_id';
        $relatedPivotKey = 'privacy_id';

        $parentKey = 'post_id';
        $relatedKey = 'post_id';
        $inverse = false;
        //$related_table=with(new $related)->getTable();
        //return $this->morphRelated($related);
        ///*
        $user = Auth::user();
        $user_id = is_object($user) ? $user->user_id : 'NO_SET';

        return $this->morphToMany(
            $related,
            $name,
            $pivot_table,
            $foreignPivotKey,
            $relatedPivotKey,
            $parentKey,
            $relatedKey,
            $inverse
        )
                    ->using($pivot)
                    ->withPivot($pivot_fields)
                    ->wherePivot('user_id', $user_id)
                    ->withTimestamps()
        ;
    }
    */
    /*
    public function getFormValue($key){
        dddx($key);//firstname
    }
    */

    /**
     * @return mixed
     */
    public function getPrivaciesAttribute() {
        return $this->getRelationValue('privacies')->keyBy('post_id');
    }
}
