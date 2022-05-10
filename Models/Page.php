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
    /*
    "id" => "trallala"
        "parent_id" => 0
        "guid" => "trallala"
        "title" => "trallala"
        "ns" => "mediamonitor"
        */

    // --------- relationship ---------------
=======

    //--------- relationship ---------------
>>>>>>> 9f39ec2 (first)
=======

    //--------- relationship ---------------
>>>>>>> ffb8c7b (first)

    public function sons(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

<<<<<<< HEAD
<<<<<<< HEAD
    // ---------------------------------------------
=======
    //---------------------------------------------
>>>>>>> 9f39ec2 (first)
=======
    //---------------------------------------------
>>>>>>> ffb8c7b (first)

    /**
     * Undocumented function.
     *
     * @return void
     */
    public function getRows() {
<<<<<<< HEAD
<<<<<<< HEAD
        $nss = [];
        $nss[] = 'pub_theme';
        $main_module = config('xra.main_module');

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
            ->filter(
                function($item){
                    return Str::endsWith($item->getFilename(), '.blade.php');
                    //return true;
                }
            )
            ->map(
                function ($file) use ($ns) {
=======
=======
>>>>>>> ffb8c7b (first)
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
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
                    $title = $file->getFilenameWithoutExtension();
                    $title = Str::before($title, '.blade');

                    return [
                        'id' => $title,
                        'parent_id' => 0,
                        'guid' => $title,
                        'title' => $title,
<<<<<<< HEAD
<<<<<<< HEAD
                        'ns' => $ns,
                    //    'ext' => $file->getExtension(),
=======
>>>>>>> 9f39ec2 (first)
=======
>>>>>>> ffb8c7b (first)
                    ];
                }
            )->filter(
                function ($item) {
                    return ! in_array($item['guid'], ['index', 'show']);
                }
            )->all();
<<<<<<< HEAD
<<<<<<< HEAD
            $pages = $pages->merge($tmp);
        }

        return $pages->all();
    }
}// end model
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
