<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'sourceLanguage' => 'ru',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class' => 'frontend\widgets\MultiLang\Components\UrlManager',
// заменяем стандартный урл.менеджер на наш.
            'languages' => ['ru', 'en'],
//список языков на который переводим сайт
            'enableDefaultLanguageUrlCode' => true,
            //'enableLanguagePersistence' => false,
            //'enableLocaleUrls' => false,
// показываем идентификатор языка по умолчанию, если false, то при в корне сайта не будет виден идентификатор языка  www.site.com/   , с true – www.site.com/ru
            'rules' => [
                '/exchangebiki' => '/works/lcoin',
                '/trade3m' => '/works/lafka',
                '/solutions/index' => '/works/lafka',
                '/solutions' => '/works/index',
                '/portfolio/ru' => '/works/lafkaru',
                //'/<language:(ru)>/'=>'/site/index',
                '/'=>'/site/index',
                '/m'=>'/site/redir-perm',
                '/mobile'=>'/site/redir-perm',
                '/test/'=>'/test/index',
                '/test/meta'=>'/test/meta',
                '/services'=>'/services/index',
                '/about'=>'/company/index',
                '/contacts'=>'/contacts/index',
                '/send-stat-data'=>'/contacts/save-client-email',
                '/contacts/save-client-email'=>'/contacts/save-client-email',
                '/cookies'=>'/static/cookie',
                '/terms'=>'/static/terms',
                '/privacy'=>'/static/privacy',

                '/request/<id:\d+>/<key>'=>'/request/view',

                //'/<controller:services>/<category>' => 'services/show-db-service',
                '<service_category>/<category>' => 'services/show-db-service',
                '/<controller:services>/<category:[\w_\/-]+>/<subcategory:[\w_\/-]+>' => 'services/show-db-sub-service',

                '/blog/search'=>'/blog/post-search',
                '/<language:(eu|it|de)>/<controller:blog>/category/<category>/<page:\d+>' => 'blog/index',
                '/<controller:blog>/category/<category>/<page:\d+>' => 'blog/index',
                '/<language:(eu|it|de)>/blog/<page:\d+>' => 'blog/index',
                '/blog/<page:\d+>' => 'blog/index',
                '/<language:(ru|eu|it|de)>/blog/search/<search>' => 'blog/post-search',
                '/blog/search/<search>' => 'blog/post-search',

                '/<controller:blog>/category/<category>'=>'blog/index',
                // blog show-post returned

                '/<controller:blog>/category/<category>'=>'blog/index',
                '/blog/news1/' => 'blog/news1/',
                '/blog' => 'blog/index',
                '/<id>' => 'blog/show-post',


                '<controller:\w+>/<action>' => '<controller>/<action>',
                '/<controller:\w+>' => '<controller>/index',


                '/<category:[\w_\/-]+>/<subcategory:[\w_\/-]+>' => 'services/show-db-sub-service',

            ],
        ],
        'ImageComponent' => [
            'class'=>'common\components\ImageComponent',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
// app название нашего php файла переводов который нужно создать app.php (может быть любым)
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
// путь для нашего файла переводов frontend/messages/ru/app.php
                    'sourceLanguage' => '',
// язык с какого переводим, то есть, в проекте все надписи пишем на английском
                ],
                'static*' => [
// app название нашего php файла переводов который нужно создать app.php (может быть любым)
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
// путь для нашего файла переводов frontend/messages/ru/app.php
                    'sourceLanguage' => '',
// язык с какого переводим, то есть, в проекте все надписи пишем на английском
                ],
            ],
        ],
    ],
    'params' => $params,
];
