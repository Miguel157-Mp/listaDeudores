<?php

return [
    'name' => env('APP_NAME', 'Laravel PWA'),
    'short_name' => 'PWA',
    'theme_color' => '#ffffff',
    'background_color' => '#ffffff',
    'start_url' => '/',
    'display' => 'standalone',
    'icons' => [
        [
            'src' => '/icon-192x192.png',
            'sizes' => '192x192',
            'type' => 'image/png',
        ],
        [
            'src' => '/icon-512x512.png',
            'sizes' => '512x512',
            'type' => 'image/png',
        ],
    ],
    // Otras configuraciones según sea necesario
];
