<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

trait UsesFilters
{
    public function getFilter(array $options = ['recent', 'resolved', 'unresolved'], string $default = 'recent'): string
    {
        $filter = (string) request('filter');

        return \in_array($filter, $options, true) ? $filter : $default;
    }
}
