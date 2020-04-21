<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\models\PostRedirects */
/* @var $form ActiveForm */
?>
<div class="add-post-redirect">

    <?php $form = ActiveForm::begin(); ?>

    * <?= $form->field($model, 'url_from') ?>
        <?= $form->field($model, 'url_too') ?>
        <?= $form->field($model, 'code')->textInput(['value'=>302]) ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

    <div>
        <b>*</b> url like: /blog/how-to-develop-dating-app-like-tinder
    </div>

</div><!-- add-post-redirect -->
