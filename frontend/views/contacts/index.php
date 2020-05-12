<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
$description = Yii::t('app','meta_contacts_description');
$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $description,
]);
/*$this->registerCssFile("/styles/bootstrap.min.css");*/
/*$this->registerCssFile("/styles/app.css");*/
/*$this->registerCssFile("/styles/contacts.css");*/
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => 'https://demol3m.fun/images/l3m-t.png',
],'og_image');
$this->title = Yii::t('app','meta_contacts_title');
?>
<?=$this->render("../blog/_styles");?>
<!-- Load CSS Compilled without JS -->
<noscript><link rel="stylesheet" href="/styles/home.css"></noscript>
<link rel="stylesheet" href="/styles/contacts.css">
<style type="text/css">
.error{border: 1px solid red !important;}
body .container{max-width: 990px;width: 100%;}
.text-center {text-align: center;}

.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
#contacts .send_message{
    background-color: #151515;
    padding-top: 194px;
    padding-bottom: 145px;
}
#contacts .title h1{
    color: #fff;
    font-size: 42px;
}
#contacts .title p{
    color: #fff;
    font-size: 18px;
    margin-top: 29px;
    padding: 0 10px;
}
#contacts form input{
    border: 0;
    border-radius: 0;
    height: 61px;
    border-bottom: 1px solid #fff;
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    position: relative;
    cursor:default;
    padding: 1px 22px;
    outline: none;
}
#contacts form .label,
#contacts form span{
    position: absolute;
    transition: all 0.3s;
    height: 0;
}
#contacts form i{
    transition: all 0.5s;
}
#contacts form{
    margin-top: 45px;
}
#contacts .up-outer{
    position: relative;
}
#contacts form .upload{
    width: 40px;
    height: 40px;
    background: url('../images/contacts/clip.svg') no-repeat center center;
    position: absolute;
    top: 10px;
    right: 8px;
    left:auto;
    cursor: pointer;
    overflow: hidden;
}
#contacts form .up-inner{
    opacity: 0;
}
#contacts form .upload:hover{
    background-image: url('../images/contacts/clipred.svg');;
}
#contacts .form-group{
    max-width: 640px;
    width: 100%;
    margin: 0 auto 40px;
    position: relative;
}
@media only screen and (max-width:449px){#contacts form{padding: 0 15px;}
.header__content:after{left:20px;right:20px;}
.header__logo{height:60px;line-height:60px;}
.header_white .tt2,
.headerWhite.header .header__logo .tt2{opacity:0;visibility:hidden;}
.header_white .tt3,
.headerWhite .header__logo .tt3{opacity:1;visibility:visible;}
.header__menu-mobile-control{width:70px;height:60px;background-position-x:21px;}
.header__menu_visible{padding-top:0px;}
.header__menu-link:after{left:20px;right:20px;}
.header__social-mobile-control{width:70px;height:60px;background-position-x:18px;}
.header__social{top:60px;}
.header__social-link{padding:0 70px 0 20px;}
.header_white .header__social-mobile-control{background-position-x:18px;}
.headerWhite .header__social-mobile-control{background-position-x:16px;}
.header_white .header__social-mobile-control_active{background:url('../images/social.svg') no-repeat 18px 50%, #fff;}}
@media (max-height:400px){.header__menu-link:first-child{margin-top:20px !important;}}
@media (max-height:400px) and (max-width:700px){.header_white .header__social-mobile-control_active{background:url(../images/social.svg) no-repeat 18px 50%, #fff !important;}
</style>



<section id="contacts">
    <div class="send_message">
        <div class="container">
        <div class="row title"style="justify-content: center;">
            <h1 class="text-center" style="color: white"><?= Yii::t('app', 'text_contacts_title') ?></h1>
            <p class="text-center" style="color: white">
                <?= Yii::t('app', 'text_contacts_sub') ?>
            </p>
        </div>
        <?= Html::beginForm('','post',['id' => 'contacts-form','class' => 'contacts']); ?>
            <div class="row">
                <div class="form-group clearfix">
                    <div class="user-n">
                        <?= Html::activeInput('name',$model, 'username',['id'=>'username','class' => 'form-control choice']) ?>
                        <label class="label" style="padding-left: 10px;" for="username"><?= Yii::t('app', 'text_contacts_name') ?></label>
                    </div>
                    <div class="email-form">
                        <?= Html::activeInput('email',$model, 'email',['id'=>'email','class' => 'form-control choice']) ?>
                        <label class="label" for="email"><?= Yii::t('app', 'text_contacts_email') ?></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group up-outer">
<!--                    <input type="details" class="form-control choice" id="details">-->
                    <?= Html::activeInput('details',$model, 'details',['id'=>'details','class'=>'form-control choice']) ?>

                    <label class="label" for="details"><?= Yii::t('app', 'text_contacts_project_details') ?></label>
                    <div class="attach">
                        <input class="upload" id="upload" name="upload" type="file">
                    </div>
                    <div class="files"></div>
                </div>
            </div>
            <div class="row" style="justify-content: center;">
                <!--<div class="form-group budget">
                    <div class="drop"></div>
                    <label class="select">
                        <span>What is your budget?</span>
                        <?= Html::activeInput('text',$model, 'budget',['id'=>'budget','readonly'=>'true']) ?>

                        <div class="down">
                            <div class="select active"></div>
                            <div class="select">$3 000 - $12 000</div>
                            <div class="select">$9 000 - $15 000</div>
                            <div class="select">$10 000 and Up</div>
                            <div class="select">Not defined</div>
                        </div>
                    </label>

                </div>-->
                <div class="buttonSicWrapper center">
                    <div class="buttonSic w280">
                        <input type="submit" id="contactsSend" value="<?= Yii::t('app', 'text_contacts_send') ?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
    <div class="cities" style="background-color: #000000;">
        <div class="container">
            <?= Yii::t('app', 'html_contacts_contacts') ?>
        </div>
    </div>
    <?= Yii::t('app', 'map_contacts') ?>
    <style>
    @media(max-width: 767px){
        .map{
        display: none!important;
    }
    }
    </style>

    </div>
</section>
<div hidden class="contactsPopupWrapper">
    <div class="contactsPopup">
        <img data-src="/images/contacts/like.svg" alt="like">
        <p class="msend">Message send!</p>
        <div class="arrow"></div>
        <p class="request">
            Thank you for your request. We will
            <br>
            respond you as soon as possible
        </p>
        <img data-src="/images/contacts/logo.svg" alt="logo">
    </div>
    <div class="contactsPopupClose">
        <img data-src="/images/contacts/close.popup.svg" alt="close">
    </div>
</div>

<?= Html::submitButton('Send message',['id'=>'contacts-send-button','style'=>'display:none;']) ?>
<?= Html::endForm(); ?>

<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>