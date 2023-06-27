<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

use App\Models\Subscription;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\User\Models\User;

trait ProvidesSubscriptions
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function subscriptions()
    {
        return $this->subscriptionsRelation;
    }

    /**
     * It's important to name the relationship the same as the method because otherwise
     * eager loading of the polymorphic relationship will fail on queued jobs.
     *
     * @see https://github.com/laravelio/laravel.io/issues/350
     */
    public function subscriptionsRelation(): MorphMany
    {
        return $this->morphMany(
            Subscription::class,
            'subscriptionsRelation',
            'subscriptionable_type',
            'subscriptionable_id',
        );
    }

    public function hasSubscriber(User $user): bool
    {
        return $this->subscriptionsRelation()
            ->where('user_id', $user->id)
            ->exists();
    }
}
