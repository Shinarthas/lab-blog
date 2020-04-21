<?php
return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/main.php'),
    require(__DIR__ . '/main-local.php'),
    [
        'components' => [
            'db' => [
                'dsn' => 'mysql:host=localhost;dbname=thunderrise_advanced_tests',
            ]
        ]
    ]
);