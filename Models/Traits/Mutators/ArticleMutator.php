<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits\Mutators;

/**
 * Undocumented trait.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ea4d650 (rebase)
=======
>>>>>>> ae00439 (rebase)
trait ArticleMutator {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bb94901 (rebase)
=======
>>>>>>> f930b9f (rebase)
=======
>>>>>>> af0dac7 (rebase)
<<<<<<< HEAD
=======
>>>>>>> a3bd33a (rebase)
=======
=======
>>>>>>> f930b9f (rebase)
>>>>>>> bb3945d (rebase)
=======
>>>>>>> bb94901 (rebase)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
=======
=======
    public function getParentIdAttribute(?int $value): ?int {
>>>>>>> 1daf8a3 (Lint)
<<<<<<< HEAD
>>>>>>> af0dac7 (rebase)
=======
=======
trait ArticleMutator
{
    public function getParentIdAttribute(?int $value): ?int
    {
>>>>>>> 42ca46e (up)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> ae00439 (rebase)
>>>>>>> aff4d2d (rebase)
=======
=======
=======
>>>>>>> 6d76482 (up)
trait ArticleMutator {
<<<<<<< HEAD
<<<<<<< HEAD
    public function getParentIdAttribute(?int $value): ?int {
<<<<<<< HEAD
>>>>>>> afa2edf (Lint)
>>>>>>> f0ffa9e (rebase)
=======
=======
    /**
     
     */
    public function getParentIdAttribute(?int $value):?int {
>>>>>>> f4041d1 (up)
>>>>>>> b996731 (rebase)
=======
>>>>>>> a3bd33a (rebase)
=======
=======
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
<<<<<<< HEAD
>>>>>>> bb3945d (rebase)
=======
=======
=======
    public function getParentIdAttribute(?int $value): ?int {
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
>>>>>>> bb94901 (rebase)
=======
>>>>>>> aff4d2d (rebase)
>>>>>>> ea4d650 (rebase)
=======
    public function getParentIdAttribute(?int $value): ?int {
<<<<<<< HEAD
>>>>>>> afa2edf (Lint)
>>>>>>> f0ffa9e (rebase)
>>>>>>> ae00439 (rebase)
=======
>>>>>>> 6d76482 (up)
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
