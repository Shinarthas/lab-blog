<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile('/scripts/tinymce/js/tinymce/tinymce.min.js');

/* @var $this yii\web\View */
/* @var $model common\models\ServicesTranslationsForm */
/* @var $form ActiveForm */
?>
<script>
    $(function () {

        tinymce.init({
            selector: '#content',
            height: 500,
            menubar: false,
            language:"ru",
            plugins: [
                'advlist autolink lists link image charmap print preview anchor code codesample',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code codesample',
            forced_root_block : "",
            //  content_css: '//www.tinymce.com/css/codepen.min.css'
            setup : function(ed) {
                ed.on('change', function(e) {
                    // This will print out all your content in the tinyMce box

                    $("#content").text(ed.getContent());
                });
            }
        });

    });
</script>
<div class="service-translation">

    <h1>Language name: <?=$lang->name?> </h1>
    <h2>Manin Service: <?=$parent_service->name?></h2>
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'h1') ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'content')->textInput(['id'=>'content']) ?>
        <?= $form->field($model, 'meta_desc') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- services-services-listservice-translation -->
