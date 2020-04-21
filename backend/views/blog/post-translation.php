<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 13.12.2016
 * Time: 13:20
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->registerJsFile('/scripts/img-file-upload.js');
$this->registerJsFile('/scripts/clipboard.min.js');
$this->registerJsFile('/scripts/tinymce/js/tinymce/tinymce.min.js');
?>

<script type="text/javascript">
    $( document ).ready(function() {
        $("#postnewform-title").focusout(function(){
            var title = $('#postnewform-title').val();
            $.get( "/blog/get-seo-post-url", { url: title } )
                .done(function( data ) {
                    if(data.status == 200)
                    {
                        $("#postnewform-seo_url").val(data.value);
                    }
                });
        });

        loadImgFiles();

        clipboard = new Clipboard('.img-list img');

        $('#myModal').on('hidden.bs.modal', function (e) {
            loadImgFiles();
        });


        tinymce.init({
            selector: '#content_preview',
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

                    $("#content_preview").text(ed.getContent());
                });
            }
        });
        tinymce.init({
            selector: '#content',
            height: 500,
            menubar: false,
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

<h1>Перевод для статьи: <?=$original_post->title?> </h1>
<h2>Язык:<?=$model_lang->name?></h2>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'post_id')->hiddenInput() ?>
<?= $form->field($model, 'title') ?>
<?= $form->field($model, 'h1') ?>
<?= $form->field($model, 'meta_desc') ?>

<?= $form->field($model, 'content_preview')->textarea(['id'=>"content_preview"]) ?>
<div>
    <?php if($model->imageFile){ ?>
        <img src="<?php echo Yii::getAlias('@front').DIRECTORY_SEPARATOR.Yii::$app->ImageComponent->getCacheImage($model->imageFile,$model->imagePath ,500,500); ?>" title="Задний фон/главная картинка статьи">
    <? }?>
</div>
<?= $form->field($model, 'imageFile')->fileInput()  ?>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Загрузить картинки</button>
<div class="img-list">

</div>

<?= $form->field($model, 'content')->textarea(['id'=>"content"]) ?>

<?= Html::submitButton('Сохранить/Добавить') ?>
<?php ActiveForm::end(); ?>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Загрузка файлов</h4>
            </div>
            <div class="modal-body">
                <input class="form-control" type="file" id="imageFiles" name="UploadImgFilesForm[imageFiles]" multiple> <button class="btn btn-info" onclick="uploadFilesImg();">Загрузить</button>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar"
                         aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        0
                    </div>
                </div>
                <div class="result_img" style="text-align: center;">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

