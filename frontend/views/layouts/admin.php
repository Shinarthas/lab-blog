<?php
use yii\helpers\Html;
use frontend\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="/favicon.ico" rel="icon shortcut" type="image/x-icon">
    <link href="/favicon.ico" rel="apple-touch-icon">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="adminWrapper">
        <?php if (Yii::$app->session['admin']): ?>
            <?= $this->render('//layouts/_headerAdmin') ?>
        <?php endif ?>
        <?= $content ?>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
