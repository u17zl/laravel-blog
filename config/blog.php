<?php
return [
    'name' => "Kevin's Blog",
    'title' => "Kevin's Blog",
    'subtitle' => 'A Paltfrom Sharing Ideas',
    'description' => 'To be a better man',
    'author' => 'Kaiwen Luo',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads',
        // 'webpath' => '/storage',
    ],
    'contact_email'=>env('MAIL_FROM'),
];