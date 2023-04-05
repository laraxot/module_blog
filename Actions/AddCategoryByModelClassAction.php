<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Blog\Actions;

use Spatie\QueueableAction\QueueableAction;

class AddCategoryByModelClassAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $name, string $model_class): void
    {
        $tmp = app($model_class)->make();
        $tmp->id = 0;
        $tmp->attachCategoryName($name);
    }
}
