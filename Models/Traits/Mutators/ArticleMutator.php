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
=======
>>>>>>> 6fec78e (rebase)
=======
>>>>>>> aef633b (rebase)
trait ArticleMutator {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f930b9f (rebase)
=======
>>>>>>> af0dac7 (rebase)
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
<<<<<<< HEAD
>>>>>>> f4041d1 (up)
<<<<<<< HEAD
>>>>>>> 94cba72 (rebase)
=======
=======
    public function getParentIdAttribute(?int $value): ?int {
>>>>>>> a822353 (.)
<<<<<<< HEAD
>>>>>>> e8fc058 (rebase)
=======
=======
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
<<<<<<< HEAD
>>>>>>> f051075 (rebase)
=======
=======
=======
    public function getParentIdAttribute(?int $value): ?int {
>>>>>>> 1daf8a3 (Lint)
<<<<<<< HEAD
>>>>>>> af0dac7 (rebase)
<<<<<<< HEAD
>>>>>>> 307d952 (rebase)
=======
=======
=======
trait ArticleMutator
{
    public function getParentIdAttribute(?int $value): ?int
    {
>>>>>>> 42ca46e (up)
<<<<<<< HEAD
>>>>>>> aff4d2d (rebase)
<<<<<<< HEAD
>>>>>>> 6fec78e (rebase)
=======
=======
=======
trait ArticleMutator {
    public function getParentIdAttribute(?int $value): ?int {
>>>>>>> afa2edf (Lint)
>>>>>>> f0ffa9e (rebase)
>>>>>>> aef633b (rebase)
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
