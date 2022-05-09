<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\LU\Models\User;

trait HasAuthor {
    /**
     * Undocumented function.
     */
    public function author(): BelongsTo {
        //return $this->authorRelation;
        return $this->belongsTo(User::class, 'author_id');
    }

    public function authoredBy(User $author) {
        $this->authorRelation()->associate($author);

        $this->unsetRelation('authorRelation');
    }

    /**
     * Undocumented function.
     */
    public function authorRelation(): BelongsTo {
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

    public function isAuthoredBy(User $user): bool {
        return $this->author()->is($user);
    }
}
