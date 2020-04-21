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
        '@front' => 'https://lab3m.com',
        '@back' => 'http://a.lab3m.com',
    ],
];
