<?php

declare(strict_types=1);

namespace Modules\Blog\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Str;
use Modules\Tenant\Services\TenantService;

class WithPostScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        // $builder->where('is_active', '=', 1);
        $post = TenantService::model('post');
        // $post_table = with(new Post())->getTable();
        $post_table = $post->getTable();
        $model_table = $model->getTable();
        $model_class = \get_class($model);
        $model_name = basename($model_class);
        $lang = 'it';
        $post_type = Str::snake($model_name);
        // $post_type = (string) str($model_name)->snake();
        $builder->leftJoin($post_table.' as post', function ($join) use ($model_table, $lang, $post_type) {
            $join->on('post.post_id', '=', $model_table.'.id')
                ->select('title', 'guid', 'subtitle')
                ->where('lang', $lang)
                ->where('post.post_type', $post_type)

            ;
        });
    }
}
