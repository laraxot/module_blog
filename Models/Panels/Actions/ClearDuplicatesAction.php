<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels\Actions;

// -------- services --------
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
use Modules\Lang\Models\Post;
<<<<<<< HEAD
=======
use Modules\Cms\Models\Panels\Actions\XotBasePanelAction;
>>>>>>> 5a5000f (up)

// -------- bases -----------

/**
 * Class ClearDuplicatesAction.
 */
class ClearDuplicatesAction extends XotBasePanelAction {
    public bool $onContainer = true;

    public bool $onItem = false;

    public string $icon = '<i class="fas fa-heart-broken"></i>';

    /**
     * @throws \Exception
     *
     * @return string
     */
    public function handle() {
        /*
        SELECT post_id,post_type,count(post_id) as q
        FROM posts
        WHERE lang='it'
        GROUP BY post_id,post_type
        HAVING q>1
        */
        // $model = app(Post::class);
        // dddx(get_class_methods($model));

        $lang = app()->getLocale();
        $rows = Post::query()
            ->selectRaw('post_id,post_type,count(post_id) as q')
            ->where('lang', $lang)
            ->groupBy('post_id', 'post_type')
            // ->having('q', '>', 1)
            ->havingRaw('q > ?', [1])
            // ->limit(2)
            ->get()
            ->toArray();

        $tot = 0;
        foreach ($rows as $v) {
            $v = (object) $v;
            $limit = (int) $v->q - 1;
            $duplicate = Post::query()
                ->where('post_id', $v->post_id)
                ->where('post_type', $v->post_type)
                ->where('lang', $lang)
                ->orderByDesc('id')
                ->limit($limit)
                ->delete();
            // dddx($duplicate);
            $tot += $duplicate;
        }

        return '<h3>'.$tot.' clear duplicates</h3>';
    }
}
