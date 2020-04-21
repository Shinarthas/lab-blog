<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model \common\models\PostCategoryBannerForm */
/* @var $form ActiveForm */

$this->registerJsFile('/scripts/autocomplete.js');

?>
<style>
    .link-preview{
        position: fixed; bottom: 50px; right: 0px;
    }
    .auto-complete-result-container{
        min-height: 100px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 3px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
        position: relative;
    }
    .auto_results{
        position: absolute;
        min-height: 50px;
        left: 0px;
        top:0;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f6f6f6;
        border-radius: 3px;
        padding: 0;
        border: 1px solid #e3e3e3;
        display: none;
        z-index: 20;
        list-style: none;
    }
    .auto_results li{
        padding: 5px 15px;
        cursor: pointer;
    }
    .auto_results li:hover{
        background: #dbdbdb;

    }

    .auto-complete-result-container .result-exemplar li{
        cursor: pointer;
        padding: 3px;
        margin-right: 3px;
        border-radius: 3px;
        background: #ccc;
    }

    .auto-complete-result-container .result-exemplar li:hover{
        background: #b4b4b4;
    }
</style>
<script>
    $(function() {
    autoCompliteCat = new AutoComplete('<?=$model->formName()?>','id_post','<?=Yii::getAlias('@back').'/post-category-banner/get-auto-complete-banner'?>');
    <?php if(!empty($model->_post)){ foreach ($model->_post as $post_item){ ?>
    autoCompliteCat.addSelectedResult(<?=$post_item['id'];?>,'<?=$post_item['name'];?>');
    <?php }} ?>
    });
</script>
<div class="post-category-banner">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id_post[]')->hiddenInput(['value'=>0]) ?>
        <?= $form->field($model, 'id_category')->hiddenInput(['value'=>intval($_GET['id'])])->label(false) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- post-category-banner -->
