<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

use Carbon\Carbon;

/**
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
trait HasTimestamps
{
    public function createdAt(): ?Carbon
    {
        return $this->created_at;
    }

    public function updatedAt(): ?Carbon
    {
        return $this->updated_at;
    }
}
