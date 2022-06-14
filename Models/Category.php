<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

/**
 * Modules\Blog\Models\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Blog\Models\Article[] $articles
 * @property-read int|null $articles_count
 * @property string|null $guid
 * @property string|null $image_src
 * @property-read string|null $lang
 * @property-read string|null $post_type
 * @property string|null $subtitle
 * @property string|null $title
 * @property string|null $txt
 * @property-read string|null $user_handle
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Xot\Models\Image[] $images
 * @property-read int|null $images_count
 * @property-read \Modules\Lang\Models\Post|null $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Lang\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-write mixed $url
 * @method static \Modules\Blog\Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang ofItem(string $guid)
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseModelLang withPost(string $guid)
 * @mixin \Eloquent
 */
class Category extends BaseModelLang {
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'related_type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function articles() {
        return $this->morphRelated(Article::class);
    }
}
