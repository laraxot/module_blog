<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits\Mutators;

/**
 * Undocumented trait.
 */
<<<<<<< HEAD
trait ArticleMutator {
<<<<<<< HEAD
<<<<<<< HEAD
    public function getParentIdAttribute(?int $value): ?int {
=======
    /**
     
     */
    public function getParentIdAttribute(?int $value):?int {
>>>>>>> b96306f (up)
=======
    public function getParentIdAttribute(?int $value): ?int {
>>>>>>> 1daf8a3 (Lint)
=======
trait ArticleMutator
{
    public function getParentIdAttribute(?int $value): ?int
    {
>>>>>>> 42ca46e (up)
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
