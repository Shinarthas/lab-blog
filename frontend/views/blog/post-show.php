<?php
use yii\helpers\Url;
use common\models\Lang;

/*$this->registerCssFile("/styles/bootstrap.min.css");*/
/*$this->registerCssFile("/styles/app.min.css");*/
/*$this->registerCssFile("/styles/blog-random.css");*/
/*$this->registerCssFile("/styles/blog-post.css");*/

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
echo Yii::getAlias('@front');die();
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
body .container{max-width: 990px;width: 100%;}
.text-center {text-align: center;}
.blogPost div.entry{margin:0 auto;max-width:960px;width: 100%;}
.blogPost{display: block;margin-top: 70px;}
.blogPost div.head{position: relative;background-color: #151515;box-shadow: inset 0 -1px 0 0 #151515;}
.blogPost div.head div.background{position: absolute;top: 0;left: 0;width: 100%;background-position: 50% 50%;background-size: cover;}
.blogPost div.head div.overlay{position: absolute;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(90, 84, 78, 0.6);}
.blogPost div.head div.content1{position: relative;margin: 0 auto;max-width: 960px;width: 100%;height: 440px;margin-top: 140px;}
.blogPost div.head div.info{text-align: center;}
.blogPost div.head span.date{display: inline-block;line-height: 30px;font-size: 14px;font-family: 'Work Sans', sans-serif;color: #ffffff;text-transform: uppercase;display: none;}
.blogPost div.head h1{padding: 15px 0;font-size: 45px;font-family: 'Work Sans', sans-serif;color: #ffffff;text-align: center;}
.blogPost div.head a.tag{display: inline-block;margin: 0 10px;padding: 0 30px;height: 50px;line-height: 50px;font-size: 18px;font-family: 'Work Sans', sans-serif;color: #ffffff;border-radius: 25px;box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5);text-decoration: none;transition-duration: 200ms;}
.blogPost div.head a.tag:hover{box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 1);}
.blogPost div.head div.content2{position: relative;margin: 0 auto;padding: 30px 0 60px;max-width: 960px;width: 100%;}
.blogPost div.head div.photo{position: absolute;top: -30px;left: 0;width: 100%;}
.blogPost div.head div.photo img{display: block;margin: 0 auto;}
.blogPost div.head span.position{display: block;line-height: 20px;font-size: 14px;font-family: 'Work Sans', sans-serif;color: #fff;text-align: center;}
.blogPost div.head span.author{display: block;line-height: 30px;font-size: 20px;font-family: 'Work Sans', sans-serif;color: #fff;text-align: center;}
.blogPost div.head div.social{padding-top: 30px;text-align: center;}
.blogPost div.head div.social>*{vertical-align: middle;}
.blogPost div.head div.social > div, .blogPost div.head div.social iframe{margin: 0 20px;}
.blogPost .content a{
    color:#6927ff
}
.bar{
    position: fixed;
    top:70px;
    left:0;
    right:0;
    z-index: 500;
}
.bar .progress-bar{
    height: 2px;
    background-color: #fff;
    width:0;
    transition: width .1s;
}
@media (max-width:991px){
.bar,.bar.fix{position: fixed;top:70px;}
}
.header{position:fixed!important;z-index:1000;}
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

<div class="bar">
    <div class="progress-bar"></div>
</div>
<div itemscope itemtype="http://schema.org/Periodical" class="blogPost">
    <div style="display: none">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing"
                   itemprop="item" href="https://lab3m.com/">
                    <span itemprop="name">Lab3M</span>
                   </a>
                <meta itemprop="position" content="1" />
            </li>
            ›
            <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing"
                   itemprop="item" href="https://lab3m.com/blog">
                    <span itemprop="name">Blog</span></a>

                <meta itemprop="position" content="2" />
            </li>
            ›
            <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing"
                   itemprop="item" href="https://lab3m.com/<?=$model->seo_url?>">
                    <span itemprop="name"><?=$model->title?></span>
                    </a>
                <meta itemprop="position" content="3" />
            </li>
        </ol>
    </div>
    <div class="head">
        <style>
        @media(max-width: 767px){
            h1{
                font-size: 24px!important;
            }
        }
        </style>
        <div class="container" style="max-width: 1200px; text-align: center;">
        <div class="col-12" style="text-align: left;"><a href="/"><?= Yii::t('app', 'go_to_main') ?></a> / <a href="/blog"><?= Yii::t('app', 'categ_blog') ?></a> / <?=$model->title?></div>
        <h1><?=$model->title?></h1>
        <h6 style="margin-bottom: 38px;"><?= Yii::t('app', 'time_blog') ?></h6>
        <div class="col-12" style="margin: 0; padding: 0;"> <img class="img-fluid" src="<?=$metaimage?>" alt=""></div>
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
                <img itemprop="image" src="/images/blog/team.png" alt="team">
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
    <div class="entry">
        <div class="content">
			
			
            <?=$model->content?>
        </div>
    </div>
    <style>
        .progress-bar{
            display: none!important;
        }
    </style>
<div hidden class="contactsPopupWrapper2">
    <div class="contactsPopup">
        <img src="/images/contacts/like.svg" alt="like">
        <p class="msend">Message send!</p>
        <div class="arrow"></div>
        <p class="request">
            Thank you for your request. We will
            <br>
            respond you as soon as possible
        </p>
        <img src="/images/contacts/logo.svg" alt="logo">
    </div>
    <div class="contactsPopupClose">
        <img src="/images/contacts/close.popup.svg" alt="close">
    </div>
<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/styles/blog-post.css?v=1.1";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/scrolling.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false},
	{"src" : "/scripts/blog_post.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>