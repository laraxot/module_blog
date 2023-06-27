<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;

trait HasAuthor
{
    /**
     * Undocumented function.
     */
    public function author(): BelongsTo
    {
        // da valutare se linkare User o Profile
        // return $this->belongsTo(User::class, 'author_id');
        // dddx(xotModel('profile'));
        // $main_module=config('xra.main_module');
        // $profile='Modules\\'.$main_module.'\Models\Profile';

        $profile = xotModel('profile');

        return $this->belongsTo(get_class($profile), 'author_id', 'user_id');
    }

    public function authoredBy(User $author): void
    {
        $this->authorRelation()->associate($author);

        $this->unsetRelation('authorRelation');
    }

    /**
     * Undocumented function.
     */
    public function authorRelation(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id')
        /*
        ->withDefault(
            [
                'id' => 1,
                'guid' => 'guest',
                'name' => 'Guest Author',
            ]
        )
        */
        ;
    }

    public function isAuthoredBy(User $user): bool
    {
        // 43   Call to an undefined method Illuminate\Database\Eloquent\Builder<Modules\Blog\Models\Article>::is().
        // return $this->author()->is($user);
        if (null === $this->author) {
            return false;
        }

        return $this->author->is($user);
    }
}
