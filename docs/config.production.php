<?php

declare(strict_types=1);

return [
    'baseUrl' => 'http://laraxot.github.io/module_blog',
    'production' => true,

    // DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),
];
