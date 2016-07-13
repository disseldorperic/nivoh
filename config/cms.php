<?php

return [
    'languages' => ['nl'],

    'news_template'      => 'news.blade.php',
    'news_item_template' => 'news_item.blade.php',

    'blog_template'      => 'blogs.blade.php',
    'blog_item_template' => 'blog.blade.php',

    'album_template'      => 'albums.blade.php',
    'album_item_template' => 'album.blade.php',

    'event_template'      => 'events.blade.php',
    'event_item_template' => 'event.blade.php',

    'album_upload_path' => '/images/albums/',
    'album_set_specs'   => true,

    'image_upload_path' => '/images/content/',

    'local_url' => env('LOCAL_URL', false),
];