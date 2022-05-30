<?php

declare(strict_types=1);

namespace Modules\Blog\Models;

// use Modules\Rating\Models\Traits\RatingTrait;
// ------services---------
// --- TRAITS ---
use Modules\Xot\Models\Traits\WidgetTrait;
use Sushi\Sushi;

class Home extends BaseModelLang {
    use Sushi;
    use WidgetTrait;

    // use RatingTrait; // non si vota la home
    /**
     * @var string[]
     */
    protected $fillable = ['id', 'name', 'icon_src', 'created_by', 'updated_by'];

    protected $rows = [
        [
            'id' => 'home',
            'name' => 'New York',
            'icon_src' => '',
            'created_by' => 'xot',
            'updated_by' => 'xot',
        ],
    ];

    // --------- relationship ---------------

    // ---------- mututars -----------
}// end model