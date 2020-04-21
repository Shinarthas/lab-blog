<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\BlogUser;
use frontend\models\BlogTag;

$this->title = ucfirst(Yii::$app->controller->id) . ' [' . ucfirst(Yii::$app->controller->action->id) . ']';
?>
<div class="adminBlog">
    <?php if (isset($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif ?>
    <div class="blogAdd">
        <?php $form = ActiveForm::begin([
            'options' => [
                'enctype' => 'multipart/form-data'
            ],
            'fieldConfig' => [
                'template' => '{label}<div class="in">{input}</div>',
                'labelOptions' => [
                    'class' => 'title'
                ]
            ]
        ]) ?>
        <div class="line">
            <label class="title">Создание записи</label>
        </div>
        <div class="line">
            <?= $form->field($item, 'author_id')->dropDownList(ArrayHelper::map(BlogUser::find()->all(), 'id', 'name')) ?>
        </div>
        <div class="line">
            <?= $form->field($item, 'background')->fileInput(['name' => 'image']) ?>
        </div>
        <div class="line">
            <?= $form->field($item, 'title') ?>
        </div>
        <div class="line">
            <?= $form->field($item, 'entry')->textarea() ?>
        </div>
        <div class="line">
            <label class="title">Список тегов:</label>
            <?php foreach(BlogTag::find()->all() as $tag): ?>
                <?= $form->field($item, 'tag[' . $tag->id . ']')->checkbox([
                    'name' => 'tag[' . $tag->id . ']',
                    'label' => $tag->title
                ]) ?>
            <?php endforeach ?>
        </div>
        <div class="line">
            <?= Html::input('submit', 'submit', 'Сохранить') ?>
        </div>
        <?php $form->end() ?>
    </div>
</div>
