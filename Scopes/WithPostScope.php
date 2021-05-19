<?php

namespace Modules\Blog\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Str;
use Modules\Ewb\Models\Post;

class WithPostScope implements Scope {
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @return void
     */
    public function apply(Builder $builder, Model $model) {
        //$builder->where('is_active', '=', 1);

        $post_table = with(new Post())->getTable();
        $model_table = $model->getTable();
        $lang = 'it';

        $post_type = (Str::snake(basename(get_class($model))));

        $builder->leftJoin($post_table.' as post', function ($join) use ($model_table, $lang, $post_type) {
            $join->on('post.post_id', '=', $model_table.'.id')
                ->select('title', 'guid', 'subtitle')
                ->where('lang', $lang)
                ->where('post.post_type', $post_type)
                //->limit(1)
            ;
        });
    }
}