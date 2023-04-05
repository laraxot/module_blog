<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Blog\Actions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Modules\Blog\Models\Category;
use Spatie\QueueableAction\QueueableAction;

class GetCategoryOptionsByModelAction
{
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(Model $model): array
    {
        $model_class = get_class($model);
        $model_type = Str::snake(class_basename($model));
        $options = Category::ofType($model_type)->get()->pluck('name', 'id')->all();
        if (0 == count($options)) {
            $config_key = $model_type.'.categories';
            $all = config($config_key);
            $tmp = app($model_class)->make();
            // $tmp = Company::make();
            $tmp->id = 0;
            $tmp->attachCategories($all);

            /*
            dddx([
                '$config_key' => $config_key,
                'config' => config($config_key),
            ]);
            */
        }

        return $options;
    }
}
