<?php

return [
  'arnoson.kirby-vite.rootDir' => '../src/',
  'arnoson.kirby-vite.outDir'  => 'assets',
  'arnoson.kirby-vite.entry'   => 'app.js',

  'medienbaecker.autoresize.maxWidth' => 2000,
  'medienbaecker.autoresize.maxHeight' => 2000,
  'medienbaecker.autoresize.quality' => 90,

  'smartypants' => true,
  'cache' => [
    'pages' => [
      'type' => 'php',
      'active' => true
    ]
  ],
  'panel' => [
    'slug' => 'cp',
    'language' => 'ru'
  ],
  'locale'       => 'ru_RU.utf-8',
  'date.handler'  => 'strftime',
  'thumbs' => [
    'format' => 'webp',
    'quality' => 80,
    'srcsets' => [
      'default' => [640, 750, 828, 1080, 1200, 1920, 2048, 3840],
    ]
  ],
  'routes' => require_once 'routes.php',
  'hooks' => require_once 'hooks.php',
  'blocks' => [
    'fieldsets' => [
      'kirby' => [
        'label' => 'Kirby blocks',
        'type' => 'group',
        'fieldsets' => [
          'heading',
          'text',
          'list',
          'quote',
          'image',
          'video',
          'code',
          'markdown',
          'gallery',
        ]
      ]
    ]
    ]
];
