<?php

declare(strict_types=1);

namespace Modules\Blog\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Str;
use Modules\Tenant\Services\TenantService;

class WithPostScope implements Scope {
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @return void
     */
    public function apply(Builder $builder, Model $model) {
        // $builder->where('is_active', '=', 1);
        $post = TenantService::model('post');
        // $post_table = with(new Post())->getTable();
        $post_table = $post->getTable();
        $model_table = $model->getTable();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f930b9f (rebase)
=======
>>>>>>> af0dac7 (rebase)
=======
>>>>>>> bb3945d (rebase)
=======
>>>>>>> bb94901 (rebase)
        $model_class = get_class($model);
=======
        $model_class =get_class($model);
>>>>>>> b96306f (up)
=======
        $model_class = get_class($model);
<<<<<<< HEAD
>>>>>>> 1daf8a3 (Lint)
=======
>>>>>>> a822353 (.)
=======
=======
>>>>>>> af0dac7 (rebase)
        $model_class = get_class($model);
=======
        $model_class =get_class($model);
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
<<<<<<< HEAD
>>>>>>> bb3945d (rebase)
        $model_name = basename($model_class);
        $lang = 'it';
<<<<<<< HEAD
<<<<<<< HEAD
        $post_type = Str::snake($model_name);
=======

<<<<<<< HEAD
        $post_type = Str::snake($model_name);
=======

<<<<<<< HEAD
        $post_type = Str::snake($model_name);
>>>>>>> 532d468a4759d4f5fa7956f2f94f26f0016c6484
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        // $post_type = (string) str($model_name)->snake();
=======
>>>>>>> bb3945d (rebase)
=======
<<<<<<< HEAD
        // $post_type = Str::snake(basename(\get_class($model)));
        $post_type = (string) str(basename(\get_class($model)))->snake();
>>>>>>> a698d0d (up)
=======
        $model_class =get_class($model);
=======
        $model_class = get_class($model);
>>>>>>> a822353 (.)
=======
=======
>>>>>>> a3bd33a (rebase)
        $model_class = get_class($model);
=======
        $model_class =get_class($model);
>>>>>>> f4041d1 (up)
<<<<<<< HEAD
>>>>>>> b996731 (rebase)
=======
=======
        $model_class = get_class($model);
>>>>>>> a822353 (.)
>>>>>>> a3bd33a (rebase)
=======
=======
=======
        $model_class = get_class($model);
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
>>>>>>> bb94901 (rebase)
=======
        $model_class = get_class($model);
>>>>>>> 6d76482 (up)
        $model_name = basename($model_class);
        $lang = 'it';
        $post_type = Str::snake($model_name);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        //$post_type = (string) str($model_name)->snake();
>>>>>>> f4041d1 (up)
=======
        // $post_type = (string) str($model_name)->snake();
>>>>>>> a822353 (.)
=======
<<<<<<< HEAD
        //$post_type = (string) str($model_name)->snake();
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
=======
=======
        // $post_type = (string) str($model_name)->snake();
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
=======
=======
>>>>>>> bb94901 (rebase)
=======

<<<<<<< HEAD
        // $post_type = Str::snake(basename(\get_class($model)));
        $post_type = (string) str(basename(\get_class($model)))->snake();
>>>>>>> a698d0d (up)
<<<<<<< HEAD
>>>>>>> 0bd72b3 (rebase)
=======
=======
        $post_type = Str::snake($model_name);
<<<<<<< HEAD
        //$post_type = (string) str($model_name)->snake();
>>>>>>> f4041d1 (up)
<<<<<<< HEAD
>>>>>>> b996731 (rebase)
=======
=======
        // $post_type = (string) str($model_name)->snake();
>>>>>>> a822353 (.)
>>>>>>> a3bd33a (rebase)
=======
=======
>>>>>>> af0dac7 (rebase)
<<<<<<< HEAD
        // $post_type = (string) str($model_name)->snake();
=======
        //$post_type = (string) str($model_name)->snake();
>>>>>>> b96306f (up)
<<<<<<< HEAD
>>>>>>> f930b9f (rebase)
<<<<<<< HEAD
>>>>>>> bb3945d (rebase)
=======
=======
=======
        // $post_type = (string) str($model_name)->snake();
>>>>>>> 1daf8a3 (Lint)
>>>>>>> af0dac7 (rebase)
>>>>>>> bb94901 (rebase)
=======
>>>>>>> 6d76482 (up)
<<<<<<< HEAD
>>>>>>> 31b2874bced50f2cc56f4271d588e071d41fd17a
=======
>>>>>>> 532d468a4759d4f5fa7956f2f94f26f0016c6484

        $builder->leftJoin($post_table.' as post', function ($join) use ($model_table, $lang, $post_type) {
            $join->on('post.post_id', '=', $model_table.'.id')
                ->select('title', 'guid', 'subtitle')
                ->where('lang', $lang)
                ->where('post.post_type', $post_type)

            ;
        });
    }
}
