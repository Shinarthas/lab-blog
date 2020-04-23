<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use janisto\timepicker\TimePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\ServicesForm */
/* @var $form ActiveForm */
$this->registerJsFile('/scripts/tinymce/js/tinymce/tinymce.min.js');
$this->registerJsFile('/scripts/img-file-upload.js');
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
            $('#servicesform-image').val($(this).attr('src'))
        })
    }

</script>
<script>
$(function () {

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

});
</script>
<div class="services-add-service">

    <?php $categories = ArrayHelper::map(\common\models\ServicesCategory::find()->all(),'id','name'); ?>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">RU</a></li>
        <li><a data-toggle="tab" href="#menu1">EN</a></li>
        <li><a data-toggle="tab" href="#menu2">CN</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">H1 RU</label>
                <input type="text" id="servicesform-h1" class="form-control" name="h1[ru]" value="<?=isset($remap['h1']['ru'])?$remap['h1']['ru']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">name RU</label>
                <input type="text" id="servicesform-h1" class="form-control" name="name[ru]" value="<?=isset($remap['name']['ru'])?$remap['name']['ru']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_title RU</label>
                <input type="text" id="servicesform-h1" class="form-control" name="meta_title[ru]" value="<?=isset($remap['meta_title']['ru'])?$remap['meta_title']['ru']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_desc RU</label>
                <input type="text" id="servicesform-h1" class="form-control" name="meta_desc[ru]" value="<?=isset($remap['meta_desc']['ru'])?$remap['meta_desc']['ru']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_image RU</label>
                <input type="file" id="servicesform-h1" class="form-control" name="meta_image[ru]">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">content RU</label>
                <textarea type="text" id="content-ru" class="form-control content" name="content[ru]"><?=isset($remap['content']['ru'])?$remap['content']['ru']:''?></textarea>

                <div class="help-block"></div>
            </div>

        </div>
        <div id="menu1" class="tab-pane fade">

            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">H1 EN</label>
                <input type="text" id="servicesform-h1" class="form-control" name="h1[en]" value="<?=isset($remap['h1']['en'])?$remap['h1']['en']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">name EN</label>
                <input type="text" id="servicesform-h1" class="form-control" name="name[en]" value="<?=isset($remap['name']['en'])?$remap['name']['en']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_title EN</label>
                <input type="text" id="servicesform-h1" class="form-control" name="meta_title[en]" value="<?=isset($remap['meta_title']['en'])?$remap['meta_title']['en']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_desc EN</label>
                <input type="text" id="servicesform-h1" class="form-control" name="meta_desc[en]" value="<?=isset($remap['meta_desc']['en'])?$remap['meta_desc']['en']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_image EN</label>
                <input type="file" id="servicesform-h1" class="form-control" name="meta_image[en]">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">content EN</label>
                <textarea type="text" id="content-en" class="form-control content" name="content[en]"><?=isset($remap['content']['en'])?$remap['content']['en']:''?></textarea>

                <div class="help-block"></div>
            </div>
        </div>
        <div id="menu2" class="tab-pane fade">

            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">H1 CN</label>
                <input type="text" id="servicesform-h1" class="form-control" name="h1[cn]" value="<?=isset($remap['h1']['cn'])?$remap['h1']['cn']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">name cn</label>
                <input type="text" id="servicesform-h1" class="form-control" name="name[cn]" value="<?=isset($remap['name']['cn'])?$remap['name']['cn']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_title CN</label>
                <input type="text" id="servicesform-h1" class="form-control" name="meta_title[cn]" value="<?=isset($remap['meta_title']['cn'])?$remap['meta_title']['cn']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_desc CN</label>
                <input type="text" id="servicesform-h1" class="form-control" name="meta_desc[cn]" value="<?=isset($remap['meta_desc']['cn'])?$remap['meta_desc']['cn']:''?>">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">meta_image CN</label>
                <input type="file" id="servicesform-h1" class="form-control" name="meta_image[cn]">

                <div class="help-block"></div>
            </div>
            <div class="form-group field-servicesform-h1">
                <label class="control-label" for="servicesform-h1">content cn</label>
                <textarea type="text" id="content-cn" class="form-control content" name="content[cn]"><?=isset($remap['content']['cn'])?$remap['content']['cn']:''?></textarea>

                <div class="help-block"></div>
            </div>
        </div>
    </div>





        <?= $form->field($model, 'seo_url')->textInput(['id'=>'seo_url']) ?>
        <?= $form->field($model, 'h1')->hiddenInput(['id'=>'seo_url','value'=>'no h1']) ?>
        <?= $form->field($model,'category_id')->dropDownList($categories) ?>




    <?= $form->field($model, 'title') ?>

    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Загрузить картинки</button>
    <div class="img-list">

    </div>
        <?= $form->field($model, 'image')->hiddenInput() ?>










        <?= $form->field($model, 'date_published')->widget(TimePicker::className(), [
            'language' => 'ru',
            'mode' => 'datetime',
            'clientOptions'=>[
                'dateFormat' => 'yy-mm-dd',
                'timeFormat' => 'HH:mm:ss',
                'showSecond' => true,
            ]
        ]); ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- services-add-service -->
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
