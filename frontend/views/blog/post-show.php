<?php
use yii\helpers\Url;
use common\models\Lang;
use common\models\Img;


$url = $model->seo_url;
if(strlen($model->h1) == 0)
{
    $this->title = $model->title.' - lab3m'.$model->h1;
}else{
    $this->title = $model->h1;
}

\Yii::$app->view->registerMetaTag([
    'name' => 'description',
    'content' => $model->meta_desc
]);

$metaimage = Yii::getAlias('@front').'/'. Yii::$app->ImageComponent->getCacheImage($model->background,$model->background_path,1920,600);
if(isset($model->background2))
    $metaimage = Yii::getAlias('@front').'/'. Yii::$app->ImageComponent->getCacheImage($model->background2,$model->background_path2,1920,600);
$this->registerLinkTag([
    'rel' => 'image_src',
    'type' => 'image/jpg',
    'href' => $metaimage,
],'image_src');
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => $metaimage,
],'og_image');
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $model->meta_desc,
]);
$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('app','text_header_blog'),
    'url'=>Url::toRoute('/blog/')
);
$this->params['breadcrumbs'][] = array(
    'label'=> $model->title,
    'url'=>Url::to(['blog/show-post','id'=>$model->seo_url,'language'=>Yii::$app->language])
);

$lang_list = Lang::getLangList();

foreach ($lang_list as $lang_item)
{
    /*foreach ($trans_list as $trans){
        if($trans['id_lang'] == $lang_item['id'] && $lang->id !=$lang_item['id'] && $lang_item['lang_default']!=1)
        {
            $this->registerLinkTag([
                'rel' => 'alternate',
                'href' =>  '/'.$lang_item['url'].'/'.$model->seo_url,
                'hreflang'=>$lang_item['hreflang']
            ]);
            // <link rel="alternate" hreflang="es" href="http://es.example.com/" />
        }
    }*/
}

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
    .block-article *{
        font-family: 'Montserrat', sans-serif!important;
    }

.content-article h1,
.content-article h2,
.content-article h3,
.content-article h4,
.content-article h5,
.content-article h6
{
    color: #3F4554 !important;
}
    .block-article {
        color: #3F4554;
        background: white;
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
    .block-article .content-article {
        margin: 0px auto;
        word-break: break-word;
    }
    .block-article .content-article p {
        font-weight: 400;
        font-size: 16px;
        line-height: 30px;
        color: #495057;
        margin: 20px 0px !important;
    }
    .block-article .content-article h2 {
        text-align: center;
        font-weight: 600;
        font-size: 35px;
        line-height: 46px;
        letter-spacing: 0.02em;
        color: #3F4554;
        margin: 40px 0px 0px 0px !important;
    }
    .block-article .content-article blockquote {
        font-weight: 500;
        font-size: 24px;
        line-height: 40px;
        padding-left: 36px;
        border-left: 3px solid #3F4554;
        color: #3F4554;
        margin: 35px 0px !important;
    }
    .block-article .content-article figure img {
        max-width: 100%;
    }
    .content-article img{
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }
    @media (min-width: 576px){
            .container {
                max-width: 540px!important;
            }
        }
        @media (min-width: 768px){
            .container {
                max-width: 720px!important;
            }
        }
        @media (min-width: 992px){
            .container {
                max-width: 960px!important;
            }
        }
        @media (min-width: 1200px){
            .container {
                max-width: 1140px!important;
            }
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
        .block-article .content-article p {
            font-size: 15px;
            line-height: 21px;
            margin: 20px 0px !important;
        }
        .block-article .content-article h2 {
            font-size: 24px;
            line-height: 32px;
            margin-top: 30px !important;
        }
        .block-article .content-article blockquote {
            font-size: 18px;
            line-height: 26px;
            padding-left: 20px;
            margin: 20px 0px !important;
        }
    }

</style>
<style>
        label, a, button {
            user-select: none;
            outline: none !important;
        }
        a, a:hover, a:active, a:focus {
            text-decoration: none;
            transition: 150ms;
        }
        .title1{
        font-weight: 700;
        font-size: 38px;
        line-height: 55px;
        margin-bottom: 50px;
        color: #3E4555;
        text-align: center;
        }
        .one-article{
            margin-bottom: 40px;
            display: flex;
            align-items: center;
        }
        .one-article .left-part {
            min-width: 470px;
            width: 470px;
            margin-right: 50px;
        }
        .left-part img {
            border-radius: 25px;
            width: 100%;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }
        .articles .one-article .right-part {
            margin-right: 0px;
        }
        .right-part .info {
            font-weight: 600;
            font-size: 12px;
            line-height: 18px;
            color: #5e6472;
            margin-bottom: 15px;
            height: 18px;
        }
        .info .date {
            float: left;
            margin-right: 10px;
        }
        .info .read {
            float: left;
            padding-left: 10px;
            position: relative;
        }
        .info .read:before {
            content: "";
            display: block;
            float: left;
            width: 4px;
            height: 4px;
            background: #8F97AB;
            border-radius: 2px;
            position: absolute;
            top: 7px;
            left: -1px;
        }
        .right-part .name {
            font-weight: 700;
            font-size: 22px;
            line-height: 34px;
            margin-bottom: 15px;
        }
        .right-part .name a {
            color: #3E4555;
            transition: 150ms;
        }
        .right-part .desc {
            font-size: 14px;
            line-height: 24px;
            color: #5e6472;
            margin-bottom: 20px;
        }
        .right-part .go-to-article a {
            font-weight: 700;
            cursor: pointer;
            color: #6927ff;
            transition: 150ms;
            font-size: 14px;
        }
        .siteWrapper{
            background-color: white;
        }
        .head{
            background: #151515;
        }
        .articles .one-article .right-part .name a:hover {
            opacity: 0.75;
        }
        @media (min-width: 576px){
            .container {
                max-width: 540px!important;
            }
        }
        @media (min-width: 768px){
            .container {
                max-width: 720px!important;
            }
        }
        @media (min-width: 992px){
            .container {
                max-width: 960px!important;
            }
        }
        @media (min-width: 1200px){
            .container {
                max-width: 1140px!important;
            }
        }

        @media (max-width: 991.98px) and (min-width: 768px){
            .one-article .left-part {
            min-width: 320px;
            width: 320px;
            margin-right: 30px;
            }
            .right-part .name {
                font-size: 18px;
                line-height: 28px;
                margin-bottom: 10px;
            }
            .right-part .desc {
                font-size: 12px;
                line-height: 20px;
                margin-bottom: 15px;
            }
        }
        @media (max-width: 767.98px){
            .title1 {
                font-size: 28px;
                line-height: 40px;
            }
            .one-article {
                display: block;
                width: 290px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 50px;
            }
            .one-article .left-part {
            min-width: 100%;
            width: 100%;
            margin-right: 0px;
            margin-bottom: 30px;
            }
            .right-part .name {
                font-size: 20px;
                line-height: 28px;
            }
        }
      </style>
      <style>
      .block-article{
        font-family: 'Montserrat', sans-serif!important;
      }
      </style>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    (!function(d, s, id) {
        var js,
            fjs = d.getElementsByTagName(s)[0],
            p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs'));
</script>
<style>
    @media(max-width: 767px){
        h1{
            font-size: 24px!important;
        }
    }
</style>
<div class="bar">
    <div class="progress-bar"></div>
</div>
<div itemscope itemtype="http://schema.org/Periodical" class="blogPost">



    <div class="head">
        <div class="block-article">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-12 go-back-div">
                        <a href="/blog/" class="go-back"><img width="10" height="18" viewBox="0 0 10 18" src="/arrows.svg" alt="back">Back</a>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-md-12">
                        <div class="article">
                            <h1 class="name-article"><?=$model->title?></h1>
                            <div class="info-article">
                                <div class="date"><?=date('M d, Y',$model->date_create)?></div>
                                <div class="read"><?= intval(strlen($model->content)/600/6 )+1 ?> <?=Yii::t('static','min')?></div>
                            </div>
                            <div class="img-article"><img src="<?=$metaimage?>"></div>
                            <div class="content-article">
                                <?=$model->content?>
                                <?=Yii::t('app','lab_team')?>
                                <a target="_blank" href="<?= Url::to('/contacts',['language'=>Yii::$app->language])?>">
                                <?=Yii::t('app','lab_cont')?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-xl-1"></div>
                <div class="col-xl-10 col-lg-12">
                <h4 style="color: black"><?=Yii::t('app','related_post')?></h4>
                </div>
                </div>
                <div class="row">

                    <?php foreach ($relatedPosts as $m) { ?>
                        <?php
                        //костыль
                        if(Yii::$app->language=='en'){
                            $model=$m->post;
                        }else{
                            $model=$m->postTranslation;
                        }
                        ?>
                        <div class="col-xl-1"></div>
                        <div itemscope itemtype="http://schema.org/NewsArticle" class="col-xl-10 col-lg-12 articles">
                            <div class="one-article">
                                <div class="left-part">
                                    <a href="<?=Url::to(['blog/show-post','id'=>$model->seo_url,'language'=>Yii::$app->language])?>">
                                        <?php
                                        $img_path=$model->background_path;
                                        $img_back=$model->background;
                                        if(isset($model->background2)){
                                            $img_path=$model->background_path2;
                                            $img_back=$model->background2;
                                        }
                                        ?>
                                        <img src="<?=Url::home(true) . Yii::$app->ImageComponent->getCacheImage($img_back,$img_path,Img::IMG_CACHE_BLOG_PREV_WIDTH,Img::IMG_CACHE_BLOG_PREV_HEIGHT,true);?>" alt="<?=isset($model->translate)? $model->translate->title : $model->title?>">

                                    </a>
                                </div>
                                <div class="right-part">
                                    <div class="info" style="width: 100%;">
                                        <div class="date"><?=date('M d, Y',$model->date_create)?></div>
                                        <div class="read"><?= intval(strlen($model->content)/600/6 )+1 ?> <?=Yii::t('static','min')?></div>
                                    </div>
                                    <div class="name">
                                        <a href="<?=isset($_GET['language']) ? '/'.$lang->url : ''; ?>/<?=$model->seo_url?>">
                                            <?=$model->title?>
                                        </a>
                                    </div>
                                    <div class="desc" itemprop="articleBody">
                                        <?=$model->content_preview?>
                                    </div>
                                    <div class="go-to-article">

                                        <a href="<?=Url::to(['blog/show-post','id'=>$model->seo_url,'language'=>Yii::$app->language])?>"><?= Yii::t('app', 'read') ?></a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>

        
        <!-- <div class="background" style="background-image: url('<?=$metaimage?>');">
            <div class="overlay"></div>
        </div> -->
        <!-- <div class="content1">
            <div class="info">
            </div>
            <h1>
                <?=$model->title?>
            </h1>
            <div class="tagList">
            </div>
        </div> -->
        <div class="content2" style="display:none">
            <div class="photo">
                <img itemprop="image" data-src="/images/blog/team.png" alt="team">
            </div>
            <div class="info">
                <span itemprop="publisher" class="position">Lab3M</span>
                <span itemprop="author" class="author">Team</span>
            </div>
            <div class="social">
                <div class="fb-share-button" data-href="<?= Url::to(['blog/'.$url]) ?>" data-layout="button_count" data-mobile-iframe="true"></div>
                <a href="http://twitter.com/share" class="twitter-share-button">Tweet</a>
            </div>
        </div>

    </div>

    <style>
        .progress-bar{
            display: none!important;
        }
    </style>
<div hidden class="contactsPopupWrapper2">
    <div class="contactsPopup">
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
<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->

<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/scrolling.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false},
	{"src" : "/scripts/blog_post.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>