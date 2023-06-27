<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --

use Illuminate\Database\Eloquent\Collection;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Category;
use Modules\Cms\Models\Panels\Actions\ArtisanAction;
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\User\Models\User;
use Modules\Tag\Models\Tag;

/**
 * Class HomePanel.
 *  forse meglio esterndere l'home panel di Xot?
 */
class HomePanel extends XotBasePanel
{
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Blog\Models\Home';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * @return object[]
     */
    public function fields(): array
    {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
            ],
            (object) [
                'type' => 'Text',
                // 'name' => 'post[title]',
                'name' => 'post.title',
                'col_size' => 12,
                'rules' => 'required',
            ],
            // */
            (object) [
                'type' => 'Textarea',
                // 'name' => 'post[subtitle]'
                'name' => 'post.subtitle',
                'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'Wysiwyg',
                // 'name' => 'post[subtitle]'
                'name' => 'post.txt',
                'except' => ['index'],
                'col_size' => 12,
            ],
            (object) [
                'type' => 'UploadImage',
                'name' => 'icon_src',
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array
    {
        /**
         * @var string
         */
        $cmd = request()->input('cmd');

        return [
            new ArtisanAction($cmd),
            new Actions\TestAction(),
            // new \Modules\Rating\Models\Panels\Actions\RateItAction(),
        ];
    }

    public function hasLang(): bool
    {
        return true;
    }

    public function featuredArticles(): Collection
    {
        $rows = Article::published()
            ->showHomepage()
            ->publishedUntilToday()
            // ->orderBy('publish_date', 'desc')
            ->orderBy('published_at', 'desc')
            ->get();

        return $rows;
    }

    public function latestArticles(): Collection
    {
        $latest_articles = Article::published()
            ->publishedUntilToday()
            // ->orderBy('publish_date', 'desc')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return $latest_articles;
    }

    public function authors(): Collection
    {
        // $authors = User::userIsAuthor()->take(4)->get();
        $authors = User::query()
            ->inRandomOrder()->limit(4)->get();

        return $authors;
    }

    public function navCategories(): Collection
    {
        $navCategories = Category::query()
            ->has('articles', '>', 0)
            // ->limit(8)
            ->get()
            // ->take(8)
        ;

        return $navCategories;
    }

    /**
     * Undocumented function.
     */
    public function footerCategories(): Collection
    {
        $footerCategories = Category::query()
            ->has('articles', '>', 0)
            // ->limit(8)
            ->get()
            // ->take(8)
        ;

        return $footerCategories;
    }

    public function footerAuthors(): Collection
    {
        // $footerAuthors = User::userIsAuthor()->take(8)->get();
        $footerAuthors = User::query()
            ->inRandomOrder()->limit(8)->get();

        return $footerAuthors;
    }

    /*
     * Undocumented function.
     */
    // public function footerTags(): Collection {
    //     $footerTags = Tag::take(15)->get();

    //     return $footerTags;
    // }
}
