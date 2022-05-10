<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

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

    /*
    "id" => "trallala"
        "parent_id" => 0
        "guid" => "trallala"
        "title" => "trallala"
        "ns" => "mediamonitor"
        */

    // --------- relationship ---------------

    // --------- relationship ---------------

    public function sons(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    /**
     * Undocumented function.
     */
    public function getRows() {
        $nss = [];
        $nss[] = 'pub_theme';
        $main_module = config('xra.main_module');
        if ('' !== $main_module) {
            $nss[] = strtolower($main_module);
        }
        $pages = collect([]);
        foreach ($nss as $ns) {
            $pub_theme_path = FileService::getViewNameSpacePath($ns);
            $pages_path = $pub_theme_path.\DIRECTORY_SEPARATOR.'pages';
            $tmp = collect(File::files($pages_path))
            ->filter(
                function ($item) {
                    return Str::endsWith($item->getFilename(), '.blade.php');
                    // return true;
                }
            )
            ->map(
                function ($file) {
                    $pub_theme_path = FileService::getViewNameSpacePath('pub_theme');
                    $pages_path = $pub_theme_path.\DIRECTORY_SEPARATOR.'pages';

                    $tmp = collect(File::files($pages_path))
                        ->map(
                            function ($file) {
                                $title = $file->getFilenameWithoutExtension();
                                $title = Str::before($title, '.blade');

                                return [
                                    'id' => $title,
                                    'parent_id' => 0,
                                    'guid' => $title,
                                    'title' => $title,
                                    'ns' => $ns,
                                    //    'ext' => $file->getExtension(),
                                ];
                            }
                     )->filter(
                        function ($item) {
                            return ! \in_array($item['guid'], ['index', 'show'], true);
                        }
                    )->all();
                    $pages = $pages->merge($tmp);
                }
            );
        }

        return $pages->all();
    }
}
