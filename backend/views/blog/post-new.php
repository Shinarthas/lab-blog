<?php
/**
 * Created by PhpStorm.
 * User: alex_d.93@mail.ru
 * Date: 09.11.2016
 * Time: 13:39
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use janisto\timepicker\TimePicker;
use common\models\Post;
//use alexdin\ckeditor\CKEditor;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;

$this->registerJsFile('/scripts/img-file-upload.js');
$this->registerJsFile('/scripts/autocomplete.js');
$this->registerJsFile('/scripts/clipboard.min.js');
$this->registerJsFile('/scripts/tinymce/js/tinymce/tinymce.min.js');

$contact_model = new \frontend\models\ContactsForm();
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
<a class="btn btn-info link-preview" target="_blank" href="<?=Url::to('@front/test/')?>">Предспросмотр</a>
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

        autoCompliteCat = new AutoComplete('<?=$model->formName()?>','category','<?=Yii::getAlias('@back').'/blog/get-auto-complete-category'?>');
        <?php if(!empty($model->_category)){ foreach ($model->_category as $cat_item){ ?>
        autoCompliteCat.addSelectedResult(<?=$cat_item['id'];?>,'<?=$cat_item['name'];?>');
        <?php }} ?>

        autoCompliteRel = new AutoComplete('<?=$model->formName()?>','related_post','<?=Yii::getAlias('@back').'/blog/get-auto-complete-related-post'?>');

        <?php if(!empty($model->_related_post)){ foreach ($model->_related_post as $rel_post){ ?>
        autoCompliteRel.addSelectedResult(<?=$rel_post['id'];?>,'<?=$rel_post['name'];?>');
        <?php }} ?>


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
            toolbar: 'undo redo | insert | styleselect | formatselect bold italic |  alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code codesample eye contact-form',
            forced_root_block : "",
            content_css: ['<?=Yii::getAlias('@back')?>/css/blogpost.css'],
            setup : function(ed) {
                ed.on('change', function(e) {
                    // This will print out all your content in the tinyMce box

                    $("#content").text(ed.getContent());
                });

                ed.addButton('eye', {
                        text: 'eye',
                        icon: false,
                        onclick: function () {
                            ed.insertContent('<div class="look"> <img class="eye" src="https://thunderrise.com/images/blog/eye.png" alt="eye thunderrise"> <div class="related"><span>Related: </span><a href="#">Why You Need In-App Purchases in Your Android App</a></div> </div>');
                        }
                    });
                ed.addButton('contact-form', {
                        text: 'contact-form',
                        icon: false,
                        onclick: function () {
                            ed.insertContent('<div class="fast-contact">' +
							'<table style="width:100%"><form><tbody><tr><td><h4>Do you have a question?</h4>'+
							'<div class="row"><?= Html::activeInput('name',$contact_model, 'username',['id'=>'username','class' => '','placeholder'=>'Name']); ?>'+
							'<?= Html::activeInput('email',$contact_model, 'email',['id'=>'email','class' => '','placeholder'=>'Email']); ?></div>'+
							'<div class="row"><?= Html::activeTextarea($contact_model, 'details',['id'=>'details','class'=>'form-control choice','placeholder'=>'Text']); ?></div>'+
							'<input type="submit" class="submit-contact-form" value="Send"></td><td>'+
							'<img src="<?=Yii::getAlias('@front')?>/images/blog/submit.png">'+
							'</td></tr></tbody></table><input name="ContactsForm[budget]" value="Not defined" type="hidden"></form></div> <br>');
                        }
                });
            }
        });

    });


</script>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data','id'=>'new-post-form']]) ?>
<?= $form->field($model, 'title') ?>
<?= $form->field($model, 'h1') ?>
<?= $form->field($model, 'meta_desc') ?>
<?= $form->field($model, 'seo_url') ?>

<?= $form->field($model, 'content_preview')->textarea(['id'=>"content_preview"]) ?>
<?/*= $form->field($model, 'content_preview')->widget(CKEditor::className(), [
    'options' => ['rows' => 6],
    'preset' => 'standard'
]) */?>

<?= $form->field($model, 'category[]')->hiddenInput(['value'=>0])?>
<?= $form->field($model, 'related_post[]')->hiddenInput(['value'=>0])?>

<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Загрузить картинки</button>
<div class="img-list">

</div>

<?= $form->field($model, 'content')->textarea(['id'=>"content"]) ?>
<?/*= $form->field($model, 'content')->widget(CKEditor::className(), [
    'options' => ['rows' => 6],
    'preset' => 'standard'
]) */?>
<?= $form->field($model, 'imageFile')->fileInput()  ?>

<?= $form->field($model, 'author_id')->dropDownList(ArrayHelper::map(\common\models\User::getUsersNameList(),'id','name'),['prompt' => 'Выберите автора...']); ?>
<?= $form->field($model, 'status')->dropDownList(Post::$statuses,['prompt' => 'Выберите статус...']); ?>
<?= $form->field($model, 'date_published')->widget(TimePicker::className(), [
    'language' => 'ru',
    'mode' => 'datetime',
    'clientOptions'=>[
        'dateFormat' => 'yy-mm-dd',
        'timeFormat' => 'HH:mm:ss',
        'showSecond' => true,
    ]
]); ?>
<?= Html::submitButton('Сохранить') ?>
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

<div id="out-html" style="display: none;"></div>