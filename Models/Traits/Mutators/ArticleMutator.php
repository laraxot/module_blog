<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits\Mutators;

<<<<<<< HEAD
trait ArticleMutator {
    public function getParentIdAttribute(?int $value): ?int {
=======
/**
 * Undocumented trait.
 */
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> de5af69 (up)
trait ArticleMutator
{
    public function getParentIdAttribute(?int $value): ?int
    {
<<<<<<< HEAD
>>>>>>> 71f0636 (up)
=======
trait ArticleMutator {
<<<<<<< HEAD
    public function getParentIdAttribute(?int $value): ?int {
<<<<<<< HEAD
>>>>>>> e0d1f4b (Lint)
=======
>>>>>>> de5af69 (up)
=======
trait ArticleMutator {
    public function getParentIdAttribute(?int $value): ?int {
>>>>>>> c24d571 (Lint)
=======
=======
    /**
     
     */
    public function getParentIdAttribute(?int $value):?int {
>>>>>>> f4041d1 (up)
>>>>>>> 94cba72 (rebase)
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
