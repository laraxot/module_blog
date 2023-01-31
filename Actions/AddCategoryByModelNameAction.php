<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Blog\Actions;

use Spatie\QueueableAction\QueueableAction;

class AddCategoryByModelNameAction {
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $category_name, string $model_name): void {
    }
}
