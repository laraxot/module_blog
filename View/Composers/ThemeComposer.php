<?php

declare(strict_types=1);

namespace Modules\Blog\View\Composers;

use Illuminate\Support\Collection;
use Modules\Blog\Models\Category;
use Modules\Blog\Models\{Article};

class ThemeComposer {
    /*
     * ---.

        $featured_articles = $article->published()->showHomepage()->publishedUntilToday()->orderBy('publish_date', 'desc')->get();
     */
    public function getFeaturedArticles(): Collection {
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
        $cat = Category::create(['name' => 'category one']);
        dddx($cat);

        return collect([]);
    }

    /**
     * ----.
     * $footerAuthors = User::userIsAuthor()->take(8)->get();.
     */
    public function getFooterAuthors(): Collection {
        return collect([]);
    }

    /**
     * ----.
     *  $footerCategories = Category::has('articles', '>', '0')->take(8)->get();.
     */
    public function getFooterCategories(): Collection {
        return collect([]);
    }

    /**
     * ----.
     *  $footerTags = Tag::take(15)->get();.
     */
    public function getFooterTags(): Collection {
        return collect([]);
    }
}
