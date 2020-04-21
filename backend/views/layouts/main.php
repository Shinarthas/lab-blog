<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<h1>Паша уйди от сюда</h1>
<h1>Паша уйди от сюда</h1>
<h1>Паша уйди от сюда</h1>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Labs',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Статьи',  'items' => [
            ['label' => 'Список статей', 'url' => ['/blog/post-list']],
            ['label' => 'Баннера категорий', 'url' => ['/post-category-banner']],
            ['label' => 'Новая статья', 'url' => ['/blog/post-new']],
            ['label' => 'Редиректы', 'url' => ['/blog/post-redirect-list']],
			['label' => 'Статьи в кендо', 'url' => ['/blog/kendo-list']],
         ]
        ],

        ['label' => 'Сервисы',  'items' => [
            ['label' => 'Список Сервисов', 'url' => ['/services/']],
            ['label' => 'Новый сервис', 'url' => ['/services/add-service']],
            ['label' => 'Список категорий', 'url' => ['/services/category-service-list']],
         ]
        ],
        ['label' => 'Клиенты',  'items' => [
			 ['label' => 'Заявки', 'url' => ['/contacts/']],
			 ['label' => 'БД клиентов', 'url' => ['/clients/']],
		]],
        ['label' => 'Настройки',  'items' => [
            ['label' => 'Настройки', 'url' => '/settings/'],
			['label' => 'Настройка Мета-тегов', 'url' => '/meta'],
            ['label' => 'SiteMap', 'url' => '/sitemap/'],
        ]],

    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
