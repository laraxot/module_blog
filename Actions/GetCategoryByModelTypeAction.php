<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Blog\Actions;

use Illuminate\Support\Collection;
use Modules\Blog\Models\Category;
use Modules\Xot\Actions\GetModelClassByModelTypeAction;
use Spatie\QueueableAction\QueueableAction;

class GetCategoryByModelTypeAction
{
    use QueueableAction;

    /**
     * Execute the action.
     * -- da Collection a DataCollection !!
     */
    public function execute(string $model_type): Collection
    {
        $options = Category::ofType($model_type)->get();
        $model_class = app(GetModelClassByModelTypeAction::class)->execute($model_type);
        if (0 == count($options)) {
            $config_key = $model_type.'.categories';
            $all = config($config_key);
            if (! is_array($all)) {
                throw new \Exception('Config key [[ '.$config_key.' ]] is not array');
            }
            $tmp = app($model_class)->make();
            $tmp->id = 0;
            $tmp->attachCategories($all);
        }

        return $options;
    }
}
