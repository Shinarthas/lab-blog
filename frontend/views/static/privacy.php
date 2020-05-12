<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 23.04.2020
 * Time: 14:12
 */
$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('static','text_menu_privacy'),
    'url'=>\yii\helpers\Url::toRoute('/privacy')
);
?>
<div class="container">
    <?= Yii::t('static', 'privacy') ?>
</div>

