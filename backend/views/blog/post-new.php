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
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    html, body{
        font-family: 'Poppins', sans-serif !important;
    }
    a, a:hover, a:active, a:focus {
        text-decoration: none;
        transition: 150ms;
    }
    .block-article {
        padding: 70px 0px 140px 0px;
    }
    .block-article .go-back {
        display: inline-block;
        font-weight: 600;
        font-size: 14px;
        line-height: 21px;
        color: #8F97AB;
        padding: 2px 5px;
        margin-bottom: 40px;
        margin-top: 10px;
    }
    .block-article .go-back:hover {
        color: #EB7D68;
    }
    .go-back img {
        margin-right: 10px;
        margin-top: -3px;
    }
    .block-article .name-article {
        font-weight: 600;
        font-size: 38px;
        line-height: 55px;
        letter-spacing: 0.02em;
        color: #3F4554;
        margin-bottom: 30px;
        margin-top: 0px;
        padding: 0px;
    }
    .block-article .info-article {
        font-weight: 500;
        font-size: 14px;
        line-height: 24px;
        color: #80899D;
        margin-bottom: 40px;
        height: 24px;
    }
    .block-article .info-article .date {
        float: left;
        margin-right: 20px;
    }
    .block-article .info-article .read {
        float: left;
        padding-left: 20px;
        position: relative;
    }
    .block-article .info-article .read:before {
        content: "";
        display: block;
        float: left;
        width: 6px;
        height: 6px;
        background: #80899D;
        border-radius: 3px;
        position: absolute;
        top: 9px;
        left: -1px;
    }
    .block-article .img-article {
        margin-bottom: 40px;
    }
    .block-article .img-article img {
        width: 100%;
    }
    .mce-content-body {
        margin: 0px auto;
        word-break: break-word;
    }
    .mce-content-body p {
        font-weight: 400;
        font-size: 17px;
        line-height: 30px;
        color: #495057;
        margin: 20px 0px !important;
    }
    .mce-content-body h2 {
        font-weight: 600;
        font-size: 35px;
        line-height: 46px;
        letter-spacing: 0.02em;
        color: #3F4554;
        margin: 40px 0px 0px 0px !important;
    }
    .mce-content-body blockquote {
        font-weight: 500;
        font-size: 24px;
        line-height: 40px;
        padding-left: 36px;
        border-left: 3px solid #3F4554;
        color: #3F4554;
        margin: 35px 0px !important;
    }
    .mce-content-body figure img {
        max-width: 100%;
    }
    @media (max-width: 767.98px){
        .block-article .name-article {
            font-size: 24px;
            line-height: 32px;
            margin-bottom: 25px;
        }
        .block-article .img-article {
            margin-bottom: 30px;
        }
        .mce-content-body p {
            font-size: 15px;
            line-height: 21px;
            margin: 20px 0px !important;
        }
        .mce-content-body h2 {
            font-size: 24px;
            line-height: 32px;
            margin-top: 30px !important;
        }
        .mce-content-body blockquote {
            font-size: 18px;
            line-height: 26px;
            padding-left: 20px;
            margin: 20px 0px !important;
        }
    }

</style>

<script>
    $( window ).load(function() {
        var head = $("iframe").contents().find("head");
        console.log($("iframe"))
        var css = "<style>body{width: 730px;}    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');        html, body{            font-family: 'Poppins', sans-serif !important;        }        a, a:hover, a:active, a:focus {            text-decoration: none;            transition: 150ms;        }        .block-article {            padding: 70px 0px 140px 0px;        }        .block-article .go-back {            display: inline-block;            font-weight: 600;            font-size: 14px;            line-height: 21px;            color: #8F97AB;            padding: 2px 5px;            margin-bottom: 40px;            margin-top: 10px;        }        .block-article .go-back:hover {            color: #EB7D68;        }        .go-back img {            margin-right: 10px;            margin-top: -3px;        }        .block-article .name-article {            font-weight: 600;            font-size: 38px;            line-height: 55px;            letter-spacing: 0.02em;            color: #3F4554;            margin-bottom: 30px;            margin-top: 0px;            padding: 0px;        }        .block-article .info-article {            font-weight: 500;            font-size: 14px;            line-height: 24px;            color: #80899D;            margin-bottom: 40px;            height: 24px;        }        .block-article .info-article .date {            float: left;            margin-right: 20px;        }        .block-article .info-article .read {            float: left;            padding-left: 20px;            position: relative;        }        .block-article .info-article .read:before {            content: '';            display: block;            float: left;            width: 6px;            height: 6px;            background: #80899D;            border-radius: 3px;            position: absolute;            top: 9px;            left: -1px;        }        .block-article .img-article {            margin-bottom: 40px;        }        .block-article .img-article img {            width: 100%;        }        .mce-content-body {  font-weight: 400;            font-size: 17px;            line-height: 30px;            color: #495057;          margin: 0px auto;            word-break: break-word;        }        .mce-content-body p {            font-weight: 400;            font-size: 17px;            line-height: 30px;            color: #495057;            margin: 20px 0px !important;        }        .mce-content-body h2 {            font-weight: 600;            font-size: 35px;            line-height: 46px;            letter-spacing: 0.02em;            color: #3F4554;            margin: 40px 0px 0px 0px !important;        }        .mce-content-body blockquote {            font-weight: 500;            font-size: 24px;            line-height: 40px;            padding-left: 36px;            border-left: 3px solid #3F4554;            color: #3F4554;            margin: 35px 0px !important;        }        .mce-content-body figure img {            max-width: 100%;        }    @media (max-width: 767.98px){        .block-article .name-article {                font-size: 24px;                line-height: 32px;                margin-bottom: 25px;            }        .block-article .img-article {                margin-bottom: 30px;            }        .mce-content-body p {                font-size: 15px;                line-height: 21px;                margin: 20px 0px !important;            }        .mce-content-body h2 {                font-size: 24px;                line-height: 32px;                margin-top: 30px !important;            }        .mce-content-body blockquote {                font-size: 18px;                line-height: 26px;                padding-left: 20px;                margin: 20px 0px !important;            }        }        </style>";
        $(head).append(css);
    });
</script>
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
            //content_css: ['<?=Yii::getAlias('@back')?>/css/blogpost.css'],
            setup : function(ed) {
                ed.on('change', function(e) {
                    // This will print out all your content in the tinyMce box

                    $("#content").text(ed.getContent());
                });

                ed.addButton('eye', {
                        text: 'eye',
                        icon: false,
                        onclick: function () {
                            ed.insertContent('<div class="look"> <img class="eye" src="https://lab3m.com/images/blog/eye.png" alt="eye lab3m"> <div class="related"><span>Related: </span><a href="#">Why You Need In-App Purchases in Your Android App</a></div> </div>');
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
<?php
$default_content="<p>The coronavirus pandemic may be looming over our daily lives but that doesn’t mean you should stop advertising. In fact, according to Etgar Shpivak, the author of Marketing in the Digital Era and CEO of Fixel, 
                                <b>only 8% of consumers think businesses should stop advertising during the outbreak.</b>
                                 Of course, that doesn’t mean you should just go on with life as usual — there are definitely changes you need to make to your advertising campaign for it to be effective.</p>
                                <p>We’d like to share some key insights into digital marketing strategies in the COVID-19 world that we learned from the webinar organized by <a href=\"https://drive.google.com/file/d/1PV8RySAxkxqBFq5u0qrWgKhPqYN_dJSj/view?_hsenc=p2ANqtz-8NndLH75IhxHjbTRUXFL1B_dX97Wj45iZr-oaWuccGPyFMP2gNXqILL966YKitkcW6gyiWbQNUt5y5I7hv4VPdjg8vzQ&amp;_hsmi=85976520\">Fixel</a> with <a href=\"https://www.youtube.com/watch?v=WESGXysDsyY&amp;feature=youtu.be&amp;utm_campaign=Corona%20Spring%202020&amp;utm_source=hs_email&amp;utm_medium=email&amp;utm_content=85976520&amp;_hsenc=p2ANqtz-8NndLH75IhxHjbTRUXFL1B_dX97Wj45iZr-oaWuccGPyFMP2gNXqILL966YKitkcW6gyiWbQNUt5y5I7hv4VPdjg8vzQ&amp;_hsmi=85976520\">PPC Survival Tactics During Crisis</a> last week (you can see full recording of the webinar and the deck from Fixel linked above). Let’s begin.</p>
                                <h2>Key takeaways from the webinar:</h2>
                                <h2><span style=\"font-weight: normal;\">1. Rebuild Your Marketing Plan</span></h2>
                                <p>First of all, if you haven’t already, <b>throw out your marketing plan and rebuild a new one from scratch</b>. The world is full of uncertainty right now — people don’t know what is going to happen next, they don’t know what they need or if they’re even going to have a job tomorrow. People are still going to buy stuff but that doesn’t mean the people who bought from you before the outbreak are going to buy from you during it. You need to <b>tailor your messaging to the relevant context</b>. For example, the ads you’re running in New York, which is experiencing extremely high levels of contagion, are going to be different than ones you’re running in Seoul, a city that has managed to flatten the curve. You’ll need to frame your product differently — is it a platform that can help employees work remotely? Can it also be used to help families keep in touch?<span style=\"font-weight: normal;\"><br></span></p>
                                <h2><span style=\"font-weight: normal;\">2. Review Your Engagement Patterns</span></h2>
                                <p>You’ll also need to learn new engagement patterns. Don’t just look at whether people buy — look at soft metrics. How long do people spend on your site? Which pages did they spend more time on? How did they find your site — email campaign or Facebook ad? You don’t have the luxury of waiting to be 99% certain you’ve identified the right target audience but that doesn’t mean you should just go in blind. Remember, the previous user behavior your automatic campaigns are based on isn’t going to be useful now. <b>Use these soft metrics and engagement patterns to identify which segments of your audience are engaged and then tailor your campaigns to those users specifically.</b> Don’t bother targeting consumers who demonstrate little engagement — chances are if they haven’t been attracted to your product yet, they won’t be and trying to change their mind is a waste of your money. Make sure your language is appropriate — if your target audience is now a little older, maybe cut back on the emojis and LOLs. As people spend more time at home, your audience will change and you need to be ready to adapt too.</p>
                                <h2><span style=\"font-weight: normal;\">3. Adjust your campaigns as the situations changes</span></h2>
                                <p>Finally, <b>be brutal with your campaign</b>. If you used to run ads for 14 days, run them for 7 days. You don’t know what the world will be like two weeks from now. Maybe schools will reopen. Maybe stricter lockdown measures will be imposed. Will your ads still be relevant then? Probably not. <b>A good metric to shoot for is 50–75% shorter.</b> Set up frequency capping — don’t just keep showing the same users the same ad over and over. We don’t know how long this pandemic is going to last so be frugal with your budget. You need to figure out why people are buying from you now and then focus exclusively on targeting those users.</p>
                                <div class=\"medium-insert-images\"><figure contenteditable=\"false\"> <img src=\"https://app.signum.ai/assets/blog/avXFh_croper_ru.jpeg\" alt=\"\"> </figure></div>
                                <p class=\"\"><i>To sum up we’ll add that it’s pretty important for everyone to take time now to reflect and understand the new context of the world and remember that any crises can lead to new opportunities. Try to focus on the opportunities that the current situation might open up for your customers.</i><br></p>
                                <blockquote><a href=\"http://signum.ai/\">Signum.ai</a> can help you do that by tracking 100+ data types across hundreds of millions of sources to identify meaningful topics and trends in your market to build data-driven and highly performing marketing campaigns. On top of that, our Leads Finder solution can help you optimize your ad spend by sourcing target audiences for your campaigns.</blockquote><p>Cheers,<br><a href=\"http://signum.ai/\">Signum.ai</a> team</p> ";
?>
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

<?= $form->field($model, 'content')->textarea(['id'=>"content",'value'=>$default_content]) ?>
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