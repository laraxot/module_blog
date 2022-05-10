<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Services\FileService;
use Sushi\Sushi;

/**
 * Undocumented class.
 *
 * @property int                                             $id
 * @property \Illuminate\Database\Eloquent\Collection|Page[] $sons
 * @property int|null                                        $sons_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @mixin \Eloquent
 *
 * @method static \Modules\Blog\Database\Factories\PageFactory factory(...$parameters)
 * @mixin IdeHelperPage
 */
class Page extends BaseModel {
    use Sushi;
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'pos', 'article_type', 'published_at', 'category_id',
        'layout_position', 'blade', 'parent_id', 'icon',
        'is_modal', 'status',
    ];
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
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
=======
>>>>>>> eed9a9f (first)
    /*
    "id" => "trallala"
        "parent_id" => 0
        "guid" => "trallala"
        "title" => "trallala"
        "ns" => "mediamonitor"
        */

    // --------- relationship ---------------
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======

    //--------- relationship ---------------
>>>>>>> 9f39ec2 (first)
=======

    //--------- relationship ---------------
>>>>>>> ffb8c7b (first)
=======

    //--------- relationship ---------------
>>>>>>> 5bff340 (first)
=======
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
=======

    //--------- relationship ---------------
>>>>>>> 9f39ec2 (first)
=======

    //--------- relationship ---------------
>>>>>>> ffb8c7b (first)
=======

    //--------- relationship ---------------
>>>>>>> 5bff340 (first)
=======
>>>>>>> eed9a9f (first)

    public function sons(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

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
    // ---------------------------------------------
=======
    //---------------------------------------------
>>>>>>> 9f39ec2 (first)
=======
    //---------------------------------------------
>>>>>>> ffb8c7b (first)
=======
    //---------------------------------------------
>>>>>>> 5bff340 (first)
=======
    // ---------------------------------------------
>>>>>>> eed9a9f (first)
=======
    // ---------------------------------------------
>>>>>>> 7936983 (up)
=======
    // ---------------------------------------------
>>>>>>> 9225dd6 (up)
=======
    //---------------------------------------------
>>>>>>> 9f39ec2 (first)
=======
    //---------------------------------------------
>>>>>>> ffb8c7b (first)
=======
    //---------------------------------------------
>>>>>>> 5bff340 (first)
=======
    // ---------------------------------------------
>>>>>>> eed9a9f (first)

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function getRows() {
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
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
        $nss = [];
        $nss[] = 'pub_theme';
        $main_module = config('xra.main_module');

<<<<<<< HEAD
=======
        $nss = [];
        $nss[] = 'pub_theme';
        $main_module = config('xra.main_module');
>>>>>>> eed9a9f (first)
=======
>>>>>>> e302e92 (.)
=======
        $nss = [];
        $nss[] = 'pub_theme';
        $main_module = config('xra.main_module');
>>>>>>> eed9a9f (first)
        if ('' != $main_module) {
            $nss[] = strtolower($main_module);
        }
        $pages = collect([]);
        foreach ($nss as $ns) {
            $pub_theme_path = FileService::getViewNameSpacePath($ns);
            $pages_path = $pub_theme_path.DIRECTORY_SEPARATOR.'pages';

            /*
            if (! File::exists(\dirname($pages_path))) {
                try {
                    File::makeDirectory(\dirname($pages_path), 0755, true, true);
                } catch (Exception $e) {
                    dd('Caught exception: ', $e->getMessage(), '\n['.__LINE__.']['.__FILE__.']');
                }
            }
            */
            $tmp = collect(File::files($pages_path))
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9bcf56c (.)
            ->filter(
                function($item){
                    return Str::endsWith($item->getFilename(), '.blade.php');
                    //return true;
                }
            )
            ->map(
                function ($file) use ($ns) {
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
        $pub_theme_path = FileService::getViewNameSpacePath('pub_theme');
        $pages_path = $pub_theme_path.DIRECTORY_SEPARATOR.'pages';
        /*
        if (! File::exists(\dirname($pages_path))) {
            try {
                File::makeDirectory(\dirname($pages_path), 0755, true, true);
            } catch (Exception $e) {
                dd('Caught exception: ', $e->getMessage(), '\n['.__LINE__.']['.__FILE__.']');
            }
        }
        */
        $pages = collect(File::files($pages_path))
            ->map(
                function ($file) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
            ->map(
                function ($file) use ($ns) {
>>>>>>> eed9a9f (first)
=======
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
            ->map(
                function ($file) use ($ns) {
>>>>>>> eed9a9f (first)
                    $title = $file->getFilenameWithoutExtension();
                    $title = Str::before($title, '.blade');

                    return [
                        'id' => $title,
                        'parent_id' => 0,
                        'guid' => $title,
                        'title' => $title,
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
                        'ns' => $ns,
                    //    'ext' => $file->getExtension(),
<<<<<<< HEAD
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
                        'ns' => $ns,
>>>>>>> eed9a9f (first)
=======
>>>>>>> 9bcf56c (.)
=======
                        'ns' => $ns,
                    //    'ext' => $file->getExtension(),
>>>>>>> 7936983 (up)
=======
                        'ns' => $ns,
                    //    'ext' => $file->getExtension(),
>>>>>>> 9225dd6 (up)
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
=======
>>>>>>> 5bff340 (first)
=======
                        'ns' => $ns,
>>>>>>> eed9a9f (first)
                    ];
                }
            )->filter(
                function ($item) {
                    return ! in_array($item['guid'], ['index', 'show']);
                }
            )->all();
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
>>>>>>> 7936983 (up)
            $pages = $pages->merge($tmp);
        }

        return $pages->all();
    }
<<<<<<< HEAD
}// end model
<<<<<<< HEAD
=======

        return $pages;
    }
}//end model
>>>>>>> 9f39ec2 (first)
=======

        return $pages;
    }
}//end model
>>>>>>> ffb8c7b (first)
=======

        return $pages;
    }
}//end model
>>>>>>> 5bff340 (first)
=======
=======
>>>>>>> 9225dd6 (up)
            $pages = $pages->merge($tmp);
        }

        return $pages->all();
    }
}// end model
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> eed9a9f (first)
=======
>>>>>>> e302e92 (.)
=======
}// end model
>>>>>>> 9bcf56c (.)
=======
>>>>>>> 7936983 (up)
=======
>>>>>>> 9225dd6 (up)
=======

        return $pages;
    }
}//end model
>>>>>>> 9f39ec2 (first)
=======

        return $pages;
    }
}//end model
>>>>>>> ffb8c7b (first)
=======

        return $pages;
    }
}//end model
>>>>>>> 5bff340 (first)
=======
            $pages = $pages->merge($tmp);
        }
        // dddx($pages);

        return $pages;
    }
}// end model
>>>>>>> eed9a9f (first)
