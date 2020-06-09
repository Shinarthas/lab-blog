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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');
    html, body{
        font-family: 'Montserrat', sans-serif!important;
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
        color: #5e6472;
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
        var css = "<style>body{width: 730px;}    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');        html, body{            font-family: 'Montserrat', sans-serif!important;       }        a, a:hover, a:active, a:focus {            text-decoration: none;            transition: 150ms;        }        .block-article {            padding: 70px 0px 140px 0px;        }        .block-article .go-back {            display: inline-block;            font-weight: 600;            font-size: 14px;            line-height: 21px;            color: #8F97AB;            padding: 2px 5px;            margin-bottom: 40px;            margin-top: 10px;        }        .block-article .go-back:hover {            color: #EB7D68;        }        .go-back img {            margin-right: 10px;            margin-top: -3px;        }        .block-article .name-article {            font-weight: 600;            font-size: 38px;            line-height: 55px;            letter-spacing: 0.02em;            color: #3F4554;            margin-bottom: 30px;            margin-top: 0px;            padding: 0px;        }        .block-article .info-article {            font-weight: 500;            font-size: 14px;            line-height: 24px;            color: #5e6472;            margin-bottom: 40px;            height: 24px;        }        .block-article .info-article .date {            float: left;            margin-right: 20px;        }        .block-article .info-article .read {            float: left;            padding-left: 20px;            position: relative;        }        .block-article .info-article .read:before {            content: '';            display: block;            float: left;            width: 6px;            height: 6px;            background: #80899D;            border-radius: 3px;            position: absolute;            top: 9px;            left: -1px;        }        .block-article .img-article {            margin-bottom: 40px;        }        .block-article .img-article img {            width: 100%;        }        .mce-content-body {  font-weight: 400;            font-size: 17px;            line-height: 30px;            color: #495057;          margin: 0px auto;            word-break: break-word;        }        .mce-content-body p {            font-weight: 400;            font-size: 17px;            line-height: 30px;            color: #495057;            margin: 20px 0px !important;        }        .mce-content-body h2 {            font-weight: 600;            font-size: 35px;            line-height: 46px;            letter-spacing: 0.02em;            color: #3F4554;            margin: 40px 0px 0px 0px !important;        }        .mce-content-body blockquote {            font-weight: 500;            font-size: 24px;            line-height: 40px;            padding-left: 36px;            border-left: 3px solid #3F4554;            color: #3F4554;            margin: 35px 0px !important;        }        .mce-content-body figure img {            max-width: 100%;        }    @media (max-width: 767.98px){        .block-article .name-article {                font-size: 24px;                line-height: 32px;                margin-bottom: 25px;            }        .block-article .img-article {                margin-bottom: 30px;            }        .mce-content-body p {                font-size: 15px;                line-height: 21px;                margin: 20px 0px !important;            }        .mce-content-body h2 {                font-size: 24px;                line-height: 32px;                margin-top: 30px !important;            }        .mce-content-body blockquote {                font-size: 18px;                line-height: 26px;                padding-left: 20px;                margin: 20px 0px !important;            }        }        </style>";
        css+="<style>._ngcontent-my-app-c5 * {    font-weight: 400;    font-style: normal;    color: #282d3b;}._nghost-my-app-c13 {    margin-bottom: 40px;    display: block;}.key-moment {    padding: 40px 32px;    display: flex;    align-items: center;    align-content: start;    background: #f8f8f8;    height: auto;    border-radius: 3px;}._ngcontent-my-app-c5 .sign {    flex-shrink: 0;    flex-basis: 90px;    font-size: 51px;    font-weight: 600;    text-align: center;    color: #fff;    height: 90px;    width: 90px;    line-height: 90px;    border-radius: 90px;    background: #6927FF;    align-self: flex-start;}._ngcontent-my-app-c5 .text {    flex: 1 0;    margin-left: 25px;    font-size: 17px;    line-height: 32px;    letter-spacing: .1px;}._ngcontent-my-app-c5 a {    color: #6927FF;}._ngcontent-my-app-c5 a:hover {    color: #51a9ff;    text-decoration: none;}</style>";

        $(head).append(css);
    });
</script>
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
                console.log('added');
                ed.addButton('eye', {
                    text: 'eye',
                    icon: false,
                    onclick: function () {
                        ed.insertContent(  '       <section  class="_ngcontent-my-app-c5 blog-key-moment ng-star-inserted _nghost-my-app-c13">  '  +
                            '           <div class="key-moment _ngcontent-my-app-c13">  '  +
                            '               <div class="_ngcontent-my-app-c13 sign">!</div>  '  +
                            '               <div class="_ngcontent-my-app-c13 text">  '  +
                            '                   <p>Be careful! Meditation apps have lots of peculiarities. Check our comprehensive<a href="#" target="_blank"> guide to a meditation app development</a>                    before you start a project!</p>  '  +
                            '               </div>  '  +
                            '           </div>  '  +
                            '      </section>  '    );
                    }
                });
                console.log('ok');
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
                        ed.insertContent(  '       <section  class="_ngcontent-my-app-c5 blog-key-moment ng-star-inserted _nghost-my-app-c13">  '  +
                            '           <div class="key-moment _ngcontent-my-app-c13">  '  +
                            '               <div class="_ngcontent-my-app-c13 sign">!</div>  '  +
                            '               <div class="_ngcontent-my-app-c13 text">  '  +
                            '                   <p>Be careful! Meditation apps have lots of peculiarities. Check our comprehensive<a href="#" target="_blank"> guide to a meditation app development</a>                    before you start a project!</p>  '  +
                            '               </div>  '  +
                            '           </div>  '  +
                            '      </section>  '    );
                    }
                });
            }
        });
        loadImgFiles();

        clipboard = new Clipboard('.img-list img');

        $('#myModal').on('hidden.bs.modal', function (e) {
            loadImgFiles();
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
<div class="img-original" style="height: 200px;
    overflow: auto;">

</div>
<div class="img-list">

</div>
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

<?php
if($model->content!='')
    echo $form->field($model, 'content')->textarea(['id'=>"content",'value'=>str_replace('data-src','src',$model->content)]);
else
    echo $form->field($model, 'content')->textarea(['id'=>"content",'value'=>$default_content]);

?>

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

