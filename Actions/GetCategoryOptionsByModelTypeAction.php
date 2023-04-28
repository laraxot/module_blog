<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Blog\Actions;

use Modules\Blog\Models\Category;
use Modules\Xot\Actions\GetModelClassByModelTypeAction;
use Spatie\QueueableAction\QueueableAction;

class GetCategoryOptionsByModelTypeAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $model_type, bool $only_filled = false): array
    {
        $model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);

        $options = Category::ofType($model_type)->get();

        if ($only_filled) {
            $options = $options
                ->filter(function ($item) use ($model_class) {
                    return $item->entries($model_class)->count() > 0;
                });
        }

        $options = $options->pluck('name', 'id')->all();

        return $options;
    }
}
