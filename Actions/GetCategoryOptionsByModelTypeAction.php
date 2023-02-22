<?php
/**
 * @see https://github.com/protonemedia/laravel-ffmpeg
 */
declare(strict_types=1);

namespace Modules\Blog\Actions;

use Illuminate\Support\Str;
use Modules\Blog\Models\Category;
use Spatie\QueueableAction\QueueableAction;

class GetCategoryOptionsByModelTypeAction {
    use QueueableAction;

    /**
     * Execute the action.
     */
    public function execute(string $model_type): array {
        dddx($model_type);
        // $model_class = get_class($model);
        // $model_type = Str::snake(class_basename($model));
        $model_class = collect(config('morph_map'))->get($model_type);

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
