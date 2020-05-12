<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ServicesCategoryForm */
/* @var $form ActiveForm */
$this->registerJsFile('/scripts/img-file-upload.js');
$this->registerJsFile('/scripts/tinymce/js/tinymce/tinymce.min.js');
?>
<div class="services-add-category-service">

    <?php $form = ActiveForm::begin(); ?>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">RU</a></li>
        <li><a data-toggle="tab" href="#menu1">EN</a></li>
        <li><a data-toggle="tab" href="#menu2">CN</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">Title ru</label>
                <input type="text" id="servicesform-h1" class="form-control" name="title[ru]" value="<?=isset($remap['title']['ru'])?$remap['title']['ru']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">description ru</label>
                <input type="text" id="servicesform-h1" class="form-control" name="description[ru]" value="<?=isset($remap['description']['ru'])?$remap['description']['ru']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">content ru</label>
                <textarea type="text" id="content-ru" class="form-control content" name="content[ru]"><?=isset($remap['content']['ru'])?$remap['content']['ru']:''?></textarea>

                <div class="help-block"></div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">Title en</label>
                <input type="text" id="servicesform-h1" class="form-control" name="title[en]" value="<?=isset($remap['title']['en'])?$remap['title']['en']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">description en</label>
                <input type="text" id="servicesform-h1" class="form-control" name="description[en]" value="<?=isset($remap['description']['en'])?$remap['description']['en']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">content en</label>
                <textarea type="text" id="content-en" class="form-control content" name="content[en]"><?=isset($remap['content']['en'])?$remap['content']['en']:''?></textarea>

                <div class="help-block"></div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">Title cn</label>
                <input type="text" id="servicesform-h1" class="form-control" name="title[cn]" value="<?=isset($remap['title']['cn'])?$remap['title']['cn']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">description cn</label>
                <input type="text" id="servicesform-h1" class="form-control" name="description[cn]" value="<?=isset($remap['description']['cn'])?$remap['description']['cn']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">content cn</label>
                <textarea type="text" id="content-cn" class="form-control content" name="content[cn]"><?=isset($remap['content']['cn'])?$remap['content']['cn']:''?></textarea>

                <div class="help-block"></div>
            </div>
        </div>
    </div>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'url') ?>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Загрузить картинки</button>
    <div class="img-list">

    </div>
    <img data-src="<?=$model->image?>">
    <?= $form->field($model, 'image')->hiddenInput() ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div><!-- services-add-category-service -->
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

        loadImgFiles(eventforimages);
        tinymce.init({
            selector: '#content-ru',
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

                    $("#content-ru").text(ed.getContent());
                });
            }
        });
        tinymce.init({
            selector: '#content-en',
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

                    $("#content-en").text(ed.getContent());
                });
            }
        });
        tinymce.init({
            selector: '#content-cn',
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

                    $("#content-cn").text(ed.getContent());
                });
            }
        });




        clipboard = new Clipboard('.img-list img');

        $('#myModal').on('hidden.bs.modal', function (e) {
            loadImgFiles(eventforimages);
        });


        tinymce.init({
            selector: '.content_preview',
            height: 500,
            menubar: false,
            language:"ru",
            plugins: [
                'advlist autolink lists link image charmap print preview anchor code codesample',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect |   bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code codesample ',
            forced_root_block : "",
            //  content_css: '//www.tinymce.com/css/codepen.min.css'
            setup : function(ed) {
                ed.on('change', function(e) {
                    // This will print out all your content in the tinyMce box

                    $(".content_preview").text(ed.getContent());
                });

            }
        });

    });
    function eventforimages() {
        $('.img-list img').unbind();
        $('.img-list img').click(function () {
            console.log($(this).attr('src'))
            $('#servicescategoryform-image').val($(this).attr('src'))
        })
    }

</script>