<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => [
            'tablePrefix' => 'blog_'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'aliases' => [
        '@front' => 'https://thunderrise.com',
        '@back' => 'http://editor.thunderrise.com',
    ],
];
