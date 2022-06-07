<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Modules\Xot\Services\FileService;
use Sushi\Sushi;

/**
 * Modules\Blog\Models\Page
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $guid
 * @property string|null $ns
 * @property-read \Illuminate\Database\Eloquent\Collection|Page[] $sons
 * @property-read int|null $sons_count
 * @method static \Modules\Blog\Database\Factories\PageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|Page whereId($value)
 * @mixin \Eloquent
 */
class Page extends BaseModel {
    use Sushi;
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 
        'pos', 
        'article_type', 
        'published_at', 
        'category_id',
        'layout_position', 
        'blade', 
        'parent_id', 
        'icon',
        'is_modal', 
        'status',
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

    public function getRows(): array {
        $nss = [];
        $nss[] = 'pub_theme';
        $main_module = config('xra.main_module');
        if ('' !== $main_module && null !== $main_module) {
            $nss[] = strtolower($main_module);
        }
        $pages = collect([]);
        foreach ($nss as $ns) {
            $pub_theme_path = FileService::getViewNameSpacePath($ns);
            $pages_path = $pub_theme_path.\DIRECTORY_SEPARATOR.'pages';
            $tmp = collect(File::files($pages_path));
            $tmp = $tmp->filter(
                function ($item) {
                    return Str::endsWith($item->getFilename(), '.blade.php');
                    // return true;
                }
            );

            $tmp = $tmp->map(function ($file) use ($ns) {
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
            });
            $pages = $pages->merge($tmp);
        }

        return $pages->all();
    }
}