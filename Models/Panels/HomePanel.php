<?php

declare(strict_types=1);

namespace Modules\Blog\Models\Panels;

// --- Services --

use Illuminate\Database\Eloquent\Collection;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Category;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8513cb9 (rebase)
use Modules\Cms\Models\Panels\Actions\ArtisanAction;
=======
>>>>>>> c4fb14d (Lint)
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\LU\Models\User;
use Modules\Tag\Models\Tag;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use Modules\Xot\Models\Panels\Actions\ArtisanAction;
<<<<<<< HEAD
use Modules\Cms\Models\Panels\XotBasePanel;
>>>>>>> 315e874 (up)
=======
>>>>>>> c4fb14d (Lint)
=======
use Modules\Cms\Models\Panels\Actions\ArtisanAction;
>>>>>>> 5a5000f (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> 648f2e6 (rebase)
use Modules\Cms\Models\Panels\Actions\ArtisanAction;
=======
>>>>>>> c4fb14d (Lint)
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\LU\Models\User;
use Modules\Tag\Models\Tag;
<<<<<<< HEAD
>>>>>>> a91a603 (Lint)
=======
<<<<<<< HEAD
=======
use Modules\Xot\Models\Panels\Actions\ArtisanAction;
<<<<<<< HEAD
use Modules\Cms\Models\Panels\XotBasePanel;
>>>>>>> 315e874 (up)
<<<<<<< HEAD
>>>>>>> 781794c (rebase)
=======
=======
>>>>>>> c4fb14d (Lint)
>>>>>>> 648f2e6 (rebase)
=======
>>>>>>> 658d838 (rebase)
=======
=======
use Modules\Cms\Models\Panels\Actions\ArtisanAction;
use Modules\Cms\Models\Panels\XotBasePanel;
use Modules\LU\Models\User;
use Modules\Tag\Models\Tag;
>>>>>>> a91a603 (Lint)
>>>>>>> 8513cb9 (rebase)

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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
>>>>>>> 8192562 (rebase)
=======
>>>>>>> 914e6a9 (rebase)
=======
>>>>>>> f031549 (rebase)
=======
>>>>>>> d0b387a (rebase)
=======
>>>>>>> 48f4792 (rebase)
=======
>>>>>>> c41b2a8 (rebase)
=======
>>>>>>> 355a234 (rebase)
=======
>>>>>>> 648e6d8 (rebase)
            // ->limit(8)
            ->get()
            // ->take(8)
        ;
=======
            ->take(8)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->limit(8)
>>>>>>> b022d6c (up)
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
=======
>>>>>>> 962cd73 (rebase)
=======
<<<<<<< HEAD
=======
>>>>>>> c41b2a8 (rebase)
=======
>>>>>>> 0088a11 (rebase)
=======
>>>>>>> 355a234 (rebase)
=======
>>>>>>> 648e6d8 (rebase)
            ->limit(8)
>>>>>>> a780d70 (up)
>>>>>>> a3494d5 (rebase)
            ->get();
<<<<<<< HEAD
>>>>>>> 802efe7 (up)
=======
>>>>>>> 0088a11 (rebase)
=======
            //->limit(8)
            ->get()
            //->take(8)
            ;
<<<<<<< HEAD
>>>>>>> 883dd21 (up)
=======
            // ->limit(8)
            ->get()
            // ->take(8)
        ;
>>>>>>> 056bec8 (Lint)
=======
            ->get();
>>>>>>> b02ae09 (.)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
=======
=======
            // ->limit(8)
            ->get()
            // ->take(8)
        ;
>>>>>>> 5a12252 (Lint)
>>>>>>> 962cd73 (rebase)
=======
=======
=======
            ->limit(8)
>>>>>>> b022d6c (up)
>>>>>>> 914e6a9 (rebase)
            ->get();
>>>>>>> 802efe7 (up)
<<<<<<< HEAD
>>>>>>> 8192562 (rebase)
=======
=======
            //->limit(8)
            ->get()
            //->take(8)
            ;
>>>>>>> 883dd21 (up)
<<<<<<< HEAD
>>>>>>> f031549 (rebase)
=======
=======
            // ->limit(8)
            ->get()
            // ->take(8)
        ;
>>>>>>> 056bec8 (Lint)
>>>>>>> d0b387a (rebase)
=======
>>>>>>> 48f4792 (rebase)
=======
=======
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
<<<<<<< HEAD
>>>>>>> 355a234 (rebase)
=======
=======
=======
            // ->limit(8)
            ->get()
            // ->take(8)
        ;
>>>>>>> 5a12252 (Lint)
>>>>>>> 962cd73 (rebase)
>>>>>>> 648e6d8 (rebase)

        return $navCategories;
    }

    /**
     * Undocumented function.
     */
    public function footerCategories(): Collection
    {
        $footerCategories = Category::query()
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 48f4792 (rebase)
=======
>>>>>>> 355a234 (rebase)
            ->has('articles', '>', 0)
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8192562 (rebase)
=======
>>>>>>> f031549 (rebase)
=======
>>>>>>> d0b387a (rebase)
            // ->limit(8)
            ->get()
            // ->take(8)
        ;
=======
            ->take(8)
            ->get();
>>>>>>> 802efe7 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> f031549 (rebase)
=======
            //->limit(8)
            ->get()
            //->take(8)
            ;
>>>>>>> 883dd21 (up)
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> d0b387a (rebase)
=======
            // ->limit(8)
            ->get()
            // ->take(8)
        ;
>>>>>>> 056bec8 (Lint)
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->has('articles', '>', 0)->get();
>>>>>>> b02ae09 (.)
=======
            ->has('articles', '>', 0)->get();
=======
            ->has('articles', '>', 0)
<<<<<<< HEAD
<<<<<<< HEAD
            // ->limit(8)
            ->get()
<<<<<<< HEAD
            //->take(8)
            ;
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
=======
=======
            // ->take(8)
        ;
>>>>>>> 5a12252 (Lint)
>>>>>>> 962cd73 (rebase)
=======
>>>>>>> 8192562 (rebase)
=======
>>>>>>> f031549 (rebase)
=======
>>>>>>> d0b387a (rebase)
=======
=======
            ->has('articles', '>', 0)->get();
>>>>>>> b02ae09 (.)
>>>>>>> 48f4792 (rebase)
=======
            //->limit(8)
=======
            // ->limit(8)
>>>>>>> 648e6d8 (rebase)
            ->get()
<<<<<<< HEAD
            //->take(8)
            ;
>>>>>>> 27d1a3f (up)
<<<<<<< HEAD
>>>>>>> 0088a11 (rebase)
<<<<<<< HEAD
>>>>>>> 355a234 (rebase)
=======
=======
=======
            // ->take(8)
        ;
>>>>>>> 5a12252 (Lint)
>>>>>>> 962cd73 (rebase)
>>>>>>> 648e6d8 (rebase)

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
