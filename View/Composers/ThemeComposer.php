<?php

declare(strict_types=1);

namespace Modules\Blog\View\Composers;

use Illuminate\Support\Collection;
use Modules\Blog\Models\Category;
use Modules\Blog\Models\{Article};
use Modules\LU\Services\ProfileService;
use Modules\Tag\Models\Tag;

class ThemeComposer {
    /*
     * ---.

        $featured_articles = $article->published()->showHomepage()->publishedUntilToday()->orderBy('publish_date', 'desc')->get();
     */
    public function getFeaturedArticles(): Collection {
        return Article::limit(10)
            ->orderBy('created_at', 'desc')
            ->get();
        // return collect([]);
        // da publish_date a published_at
        $rows = Article::published()
            ->showHomepage()
            ->publishedUntilToday()
            ->orderBy('published_at', 'desc')
            ->get();

        return $rows;
    }

    /*
     * ---.
     *  $latest_articles = $article->published()->publishedUntilToday()->orderBy('publish_date', 'desc')->take(3)->get();
     */
    public function getLatestArticles(): Collection {
        $rows = Article::published()
            ->publishedUntilToday()
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return $rows;
    }

    /*
     * ---.
     *  $authors = $user->userIsAuthor()->take(4)->get();
     */
    public function getAuthors(): Collection {
        return collect([]);
    }

    /*
     * ---.
     *  $navCategories = Category::has('articles', '>', '0')->take(8)->get();
     */
    public function getNavCategories(): Collection {
        $res = Category::ofType('article')->get();

        return $res;
    }

     public function getArticleCategories(): Collection {
         $res = Category::ofType('article')->get();

         return $res;
     }

    /**
     * ----.
     * $footerAuthors = User::userIsAuthor()->take(8)->get();.
     */
    public function getFooterAuthors(): Collection {
        $profile_class = ProfileService::make()->getProfileClass();
        $profile = app($profile_class);
        if (! method_exists($profile_class, 'articles')) {
            return collect([]);
        }

        $res = $profile->has('articles')->take(8)->get();

        return $res;
    }

    /**
     * ----.
     *  $footerCategories = Category::has('articles', '>', '0')->take(8)->get();.
     */
    public function getFooterCategories(): Collection {
        return Category::ofType('article')->take(8)->get();
    }

    /**
     * ----.
     *  $footerTags = Tag::take(15)->get();.
     */
    public function getFooterTags(): Collection {
        // return collect([]);
        return Tag::take(15)->get();
    }

    /**
     * Undocumented function
     */
    public function getArticleTags(): Collection {
        return Tag::take(15)->get();
    }

    /**
     * ----.
     *   $moreArticles = $article->published()
     *            ->publishedUntilToday()
     *        ->category($article->category_id)
     *        ->differentFromCurrentArticle($article->id)
     *        ->orderBy('publish_date', 'desc')
     *        ->take(3)
     *        ->get();.
     */
    public function getMoreArticles(Article $article): Collection {
        $categories_ids = $article->categories->modelKeys();
        $rows = Article::published()
            ->publishedUntilToday()
            ->withAnyCategories($categories_ids)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return $rows;
    }

    /**
     * ----.
     *   $articles = $model->with(['tags', 'category'])->orderBy('publish_date', 'desc')->paginate(10);.
     */
    public function getPaginatedArticles(int $per_page): \Illuminate\Pagination\LengthAwarePaginator {
        // Too few arguments to function Modules\Blog\Models\Article::scopeCategory(), 1 passed in
        $rows = Article::with(['tags' /* , 'category' */])
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return $rows;
    }

    public function getPaginatedArticlesByAuthor(int $user_id): \Illuminate\Pagination\LengthAwarePaginator {
        $rows = Article::published()
            ->publishedUntilToday()
            ->author($user_id)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return $rows;
    }

    /**
     * Undocumented function
     *  $articles = $article->published()->publishedUntilToday()->tag($tag->id)->orderBy('publish_date', 'desc')->paginate(10);.
     */
    public function getPaginatedArticlesByTag(string $tag): \Illuminate\Pagination\LengthAwarePaginator {
        $rows = Article::published()
            ->publishedUntilToday()
            ->withAnyTags([$tag])
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return $rows;
    }

    /**
     * Undocumented function
     * $articles = $article->published()
     *       ->publishedUntilToday()
     *       ->category($category->id)
     *       ->orderBy('publish_date', 'desc')
     *       ->paginate(10);.
     */
    public function getPaginatedArticlesByCategoryId(int $id): \Illuminate\Pagination\LengthAwarePaginator {
        $rows = Article::published()
            ->publishedUntilToday()
            ->withCategories($id)
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return $rows;
    }

    public function compose(...$args) {
        /*
        dddx(
            [
            'args'=>$args,

            ]
        );
        */
        // error 404
        return 'aaa';
    }
}
