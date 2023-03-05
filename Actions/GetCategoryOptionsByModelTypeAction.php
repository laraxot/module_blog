<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Blog\Actions;

use Modules\Blog\Models\Category;
use Spatie\QueueableAction\QueueableAction;

class GetCategoryOptionsByModelTypeAction {
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $model_type): array {
        $options = Category::ofType($model_type)->get()->pluck('name', 'id')->all();

        return $options;
    }
}
