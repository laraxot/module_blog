<?php

declare(strict_types=1);

namespace Modules\Blog\View\Composers;

use Illuminate\Support\Collection;
use Modules\Blog\Models\Article;
use Modules\Blog\Models\Category;
use Modules\LU\Services\ProfileService;
use Modules\Tag\Models\Tag;

class ThemeComposer {
    /**
     * Undocumented function.
     *
     * @return Collection<Article>
     */
    public function getFeaturedArticles(): Collection {
        return Article::query()->limit(10)
            ->orderBy('created_at', 'desc')
            ->get();
        // return collect([]);
        // da publish_date a published_at
        /*
        $rows = Article::published()
            ->showHomepage()
            ->publishedUntilToday()
            ->orderBy('published_at', 'desc')
            ->get();

        return $rows;
<<<<<<< HEAD
        $featured_articles = $article->published()->showHomepage()->publishedUntilToday()->orderBy('publish_date', 'desc')->get();
=======
>>>>>>> ea58237 (up)
        */
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

     public function getArticleCategoriesOptions(): Collection {
         $options = $this->getArticleCategories()->pluck('name', 'id');

         return $options;
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
    // public function getFooterTags(): Collection {
    //     // return collect([]);
    //     return Tag::take(15)->get();
    // }

    // /**
    //  * Undocumented function.
    //  */
    // public function getArticleTags(): Collection {
    //     return Tag::take(15)->get();
    // }

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

<<<<<<< HEAD
<<<<<<< HEAD
    public function getCardEvents(): Collection {
=======
    //public function compose(array ...$args):string {
=======
    // public function compose(array ...$args):string {
>>>>>>> 134e178 (Lint)
        /*
        dddx(
            [
            'args'=>$args,

            ]
        );
        */
        // error 404
        // return 'aaa';
    // }

<<<<<<< HEAD
    public function getCardEvents() {
>>>>>>> 7fdf4e1 (up)
=======
    public function getCardEvents():Collection {
>>>>>>> 61ca642 (up)
        $str = '[
            {
              "date": "26",
              "month": "Agosto",
              "category": "Categoria",
              "title": "Un\'estate indimenticabile",
              "description": "Una iniziativa di invito alla lettura nel parco della Vittoria, dove verrà presentato il concorso “vivere il comune”",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "tag": true,
              "img_src": "../assets/images/eventi-estate.png"
            },
            {
              "date": "03",
              "month": "Luglio",
              "category": "Categoria",
              "title": "La biblioteca nel parco",
              "description": "Una iniziativa di invito alla lettura nel parco della Vittoria, dove verrà presentato il concorso “vivere il comune”.",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "tag": true,
              "img_src": "../assets/images/eventi-biblioteca-parco.png"
            },
            {
              "date": "10",
              "month": "Giugno",
              "category": "Categoria",
              "title": "Festa delle associazioni della sesta circoscrizione",
              "description": "Le associazioni della sesta circoscrizione si troveranno nell’auditorium della musica per presentare le attività dell’anno in corso e per fare festa.",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "tag": true,
              "img_src": "../assets/images/eventi-festa-associazioni.png"
            },
            {
              "date": "30",
              "month": "Maggio",
              "category": "Festival",
              "category-date": "18 MAG 2018",
              "title": "Celluloide film festival",
              "description": "Sono più di 120 i film in programma: 27 anteprime mondiali, 13 internazionali e 37 italiane, ben oltre metà del programma sarà composta da film mai visti prima in Italia",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "tag": true,
              "img_src": "../assets/images/eventi-celluloide-festival.png"
            },
            {
              "date": "27",
              "month": "Aprile",
              "category": "Categoria",
              "title": "Street art e murales in città",
              "description": "Lo sapevi che il nostro Territorio, se imbocchi il vicolo giusto, nasconde opere di street art e bellissimi murales? Scopri con noi dove poterli ammirare.",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "tag": true,
              "img_src": "../assets/images/eventi-street-art.png"
            },
            {
              "date": "16",
              "month": "Marzo",
              "category": "Categoria",
              "title": "Tramvia, dibattito aperto a tutti i cittadini",
              "description": "In questi giorni si sono aperti o apriranno cantieri che prevedono lavori di risistemazione del fondo stradale, di riqualificazione di spazi verdi..",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "tag": true,
              "img_src": "../assets/images/eventi-tram-via.png"
            }
          ]';

        return collect(json_decode($str));
    }

<<<<<<< HEAD
    public function getCardPlaces(): Collection {
=======
    public function getCardPlaces():Collection {
>>>>>>> 61ca642 (up)
        $str = '[
            {
              "category": "Categoria",
              "title": "Il castello normanno",
              "description": "Sorta a metà Seicento come residenza di caccia di Carlo Emanuele II, che fece del centrale Salone di Diana uno snodo ideale fra palazzo e giardini.",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "img_src": "../assets/images/luoghi-castello-1.png"
            },
            {
              "category": "Categoria",
              "title": "Il castello normanno",
              "description": "Scopri il programma degli eventi dell’estate, fra feste, cultura, attività all’aperto e momenti di socializzazione.",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "img_src": "../assets/images/luoghi-castello-2.png"
            },
            {
              "category": "Categoria",
              "title": "Il castello normanno",
              "description": "Scopri il programma degli eventi dell’estate, fra feste, cultura, attività all’aperto e momenti di socializzazione.",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "img_src": "../assets/images/luoghi-castello-3.png"
            },
            {
              "category": "Categoria",
              "category-date": "18 MAG 2018",
              "title": "La Gipsoteca canoviana",
              "description": "Il complesso è situato a Possagno e contiene i modelli in gesso e i bozzetti in argilla dello scultore neoclassico Antonio Canova.",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "img_src": "../assets/images/luoghi-gipsoteca.png"
            },
            {
              "category": "Categoria",
              "title": "Tomba Brion",
              "description": "La Tomba Brion si trova in via Brioni a San Vito di Altivole. Luogo estremamente affascinante e carico di simbologia, si può raggiungere solamente in auto. ",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "img_src": "../assets/images/luoghi-tomba.png"
            },
            {
              "category": "Categoria",
              "title": "Il castello normanno",
              "description": "Scopri il programma degli eventi dell’estate, fra feste, cultura, attività all’aperto e momenti di socializzazione.",
              "link": "Leggi di più",
              "icon": "it-arrow-right",
              "img_src": "../assets/images/luoghi-castello-4.png"
            }
          ]';

        return collect(json_decode($str));
    }
}
