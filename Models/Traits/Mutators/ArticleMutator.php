<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits\Mutators;

/**
 * Undocumented trait.
 */
trait ArticleMutator {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f930b9f (rebase)
    public function getParentIdAttribute(?int $value): ?int {
=======
    /**
     
     */
    public function getParentIdAttribute(?int $value):?int {
<<<<<<< HEAD
>>>>>>> f4041d1 (up)
=======
    public function getParentIdAttribute(?int $value): ?int {
>>>>>>> a822353 (.)
=======
>>>>>>> b96306f (up)
>>>>>>> f930b9f (rebase)
        if (null !== $value) {
            return $value;
        }

        if (null === $this->getKey()) {
            return null;
        }

        $value = 0;
        $this->parent_id = $value;
        $this->save();

        return $value;
    }

    /*
    public function setPublishedAtAttribute($value) {
        dddx($value);
        if (\is_string($value)) {
            //$value = Carbon::now();
            //config('app.date_format')
            $value=Carbon::createFromFormat('d/m/Y H:i', $value);
        }
        $this->attributes['published_at'] = $value;
    }
    //*/
}
