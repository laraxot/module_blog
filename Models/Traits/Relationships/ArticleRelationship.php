<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Traits\Relationships;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Comment;
use Modules\User\Models\User;
use Modules\Xot\Models\Image;

/**
 * Undocumented trait.
 */
trait ArticleRelationship
{
    /**
     * Undocumented function
     * phpstan-return Collection
     * 26     Method Modules\Blog\Models\Article::sons() has invalid return type Modules\Blog\Models\Traits\Relationships\Collection.
     */
    public function sons(): HasMany
    {
        return $this->hasMany(Article::class, 'parent_id', 'id');
        // ->with(['post'])->orderBy('pos');
    }

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'parent_id', 'id');
    }
    /* -- usiamo spatie
    public function images(): MorphMany { // da rimettere spatie
        return $this->morphMany(Image::class, 'post');
    }
    */
    /*
      --- move to module Tag
    public function tags() {
        return $this->morphRelated(Tag::class, true);
    }
    */

    /**
     * The author that belong to the article.
     */
    /*
    public function author() {
        //return $this->belongsTo('App\User')->withTrashed(); withTrashed cos'è?
        //return $this->fullName;
        return $this->belongsTo(User::class)->withDefault(
            [
                'id' => 1,
                'guid' => 'guest',
                'name' => 'Guest Author',
            ]
        );
    }
    */

    /*
     * Get the tags of the article.
     *
     * @return \Illuminate\Database\Eloquent\Collection
       move to module tag
    public function tags()
    {
       return $this->belongsToMany(Tag::class);
    }
     */

    /*
     * Get the comments of the article.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     commmenti son sia di un articolo, o di un prodotto.. percio' morph many
    public function comments() {
        return $this->hasMany(Comment::class);
    }
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'post');
    }
}
