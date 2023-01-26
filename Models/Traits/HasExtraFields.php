<?php
/**
 * @see ---
 */

declare(strict_types=1);

namespace Modules\Blog\Models\Traits;

use Modules\Blog\Models\ExtraField;

trait HasExtraFields {
    public function extraFields() {
        return $this->morphToMany(ExtraField::class, 'model', 'extra_field_morph');
    }
}
