<?php
use yii\helpers\Url;

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/app.min.css");
$this->registerCssFile("/styles/blog-post.css?v=1.1");
$this->registerCssFile("/styles/_footer.css");


$metaimage = Url::home(true) . Yii::$app->ImageComponent->getCacheImage($model->background,$model->background_path,1920,600);
$this->registerLinkTag([
    'rel' => 'image_src',
    'type' => 'image/png',
    'href' => $metaimage,
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => $metaimage,
]);
?>
<style>
body .container{max-width: 990px;width: 100%;}
.text-center {text-align: center;}
.header{position:absolute;z-index:100;top:0;left:0;right:0;}
.header__content{margin:0 auto;width:960px;}
.header__content:after{position:absolute;content:'';bottom:-1px;left:30px;right:30px;height:1px;}
.header__logo{position:relative;float:left;height:70px;line-height:70px;}
.header__logo .tt1{display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;}
.header__logo .tt2{position:absolute;left:50%;transform:translateX(-50%);display:inline-block;opacity:0;visibility:hidden;transition-duration:300ms;}
.header__logo .tt3{position:absolute;left:50%;transform:translateX(-50%);display:inline-block;opacity:0;visibility:hidden;transition-duration:300ms;}
.header__logo img{vertical-align:middle;}
.header__logo:active{top:1px;}
.header__menu{padding-top:20px;text-align:right;}
.header__menu-link{position:relative;display:inline-block;margin:0 10px;line-height:30px;font-size:18px;font-weight:500;color:#ffffff !important;text-decoration:none;}
.header__menu-link:active{top:1px;}
.header__menu-link:after{display:block;content:'';width:0;height:1px;background-color:#ffffff;transition-duration:200ms;}
.header__menu-link:hover:after{width: 100%;}
.header__menu-link:first-child{margin-left:0;}
.header__menu-link:last-child{margin-right:0;}
.header__social-mobile-control{display:none;}
.header__social{display:none;}
.headerWhite.header{background:#fff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);}.headerWhite .header__content:after{display:none;}
.headerWhite.header .header__menu .header__menu-link{color:#fff !important;}
.headerWhite.header .header__menu.header__menu_visible .header__menu-link,
.headerWhite.header .header__menu.header__menu_visible .header__menu-link:hover{color:#fff !important;}
.headerWhite.header .header__menu .header__menu-link:hover{color:#fff !important;}
.headerWhite.header .header__menu .header__menu-link:after{background-color:#fff;}
.headerWhite.header .header__menu-link:nth-last-child(2){margin-left:10px;}
.headerWhite.header .header__menu .header__menu-link:hover:after{width:100%;background-color:#fff;}
.headerWhite.header .header__logo .tt2{position:static;display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;transform:none;}
.blogPost div.entry{margin:0 auto;max-width:960px;width: 100%;}
.blogPost{display: block;margin-top: 70px;}
.blogPost div.head{position: relative;background-color: #fff5de;box-shadow: inset 0 -1px 0 0 #151515;}
.blogPost div.head div.background{position: absolute;top: 0;left: 0;width: 100%;height: 600px;background-position: 50% 50%;background-size: cover;}
.blogPost div.head div.overlay{position: absolute;top: 0;left: 0;width: 100%;height: 100%;background-color: rgba(90, 84, 78, 0.6);}
.blogPost div.head div.content1{position: relative;margin: 0 auto;max-width: 960px;width: 100%;height: 440px;margin-top: 140px;}
.blogPost div.head div.info{text-align: center;}
.blogPost div.head span.date{display: inline-block;line-height: 30px;font-size: 14px;font-family: 'Montserrat', sans-serif;color: #ffffff;text-transform: uppercase;display: none;}
.blogPost div.head h1{padding: 30px 0;line-height: 60px;font-size: 45px;font-family: 'Montserrat', sans-serif;color: #ffffff;text-align: center;}
.blogPost div.head a.tag{display: inline-block;margin: 0 10px;padding: 0 30px;height: 50px;line-height: 50px;font-size: 18px;font-family: 'Montserrat', sans-serif;color: #ffffff;border-radius: 25px;box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.5);text-decoration: none;transition-duration: 200ms;}
.blogPost div.head a.tag:hover{box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 1);}
.blogPost div.head div.content2{position: relative;margin: 0 auto;padding: 30px 0 60px;max-width: 960px;width: 100%;}
.blogPost div.head div.photo{position: absolute;top: -30px;left: 0;width: 100%;}
.blogPost div.head div.photo img{display: block;margin: 0 auto;}
.blogPost div.head span.position{display: block;line-height: 20px;font-size: 14px;font-family: 'Montserrat', sans-serif;color: #fff;text-align: center;}
.blogPost div.head span.author{display: block;line-height: 30px;font-size: 20px;font-family: 'Montserrat', sans-serif;color: #fff;text-align: center;}
.blogPost div.head div.social{padding-top: 30px;text-align: center;}
.blogPost div.head div.social>*{vertical-align: middle;}
.blogPost div.head div.social > div, .blogPost div.head div.social iframe{margin: 0 20px;}
@media (max-width:991px){
.top-header{position:fixed;top:0;left:0;right:0;width:100%;}
.header{position:fixed;z-index:1000;}
.header_white{background:#ffffff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
.header__content{width:100%;text-align:center;}
.header_white .header__content:after{background:transparent;}
.header__logo{visibility:hidden;float:none;}
.header_white .tt1{opacity:0;visibility:hidden;}
.header_white .tt2{opacity:1;visibility:visible;}
.header{position:fixed;z-index:1000;}
.header_white{background:#ffffff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
.header__content{width:100%;text-align:center;}
.header_white .header__content:after{background:transparent;}
.header__logo{visibility:hidden;float:none;}
.header_white .tt1{opacity:0;visibility:hidden;}
.header_white .tt2{opacity:1;visibility:visible;}
.header__menu-mobile-control{display:block;position:absolute;z-index:102;top:0;left:0;width:90px;height:70px;background:url('../images/menu.svg') no-repeat 30px 50%;cursor:pointer;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
.header_white .header__menu-mobile-control{background-image:url('../images/menu2.svg');}
.headerWhite .header__menu-mobile-control{background-image:url('../images/menu2.svg');}
.header__menu-mobile-control_close{background-image:url('../images/close.svg') !important;}
.header__menu{position:fixed;z-index:101;top:0;left:0;right:0;height:0;padding-top:0;background:#fff;overflow:hidden;visibility:hidden;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
.header__menu_visible{height:100%;visibility:visible;}
.header__menu-link{display:block;margin:0;line-height:60px;font-size:24px;font-weight:400;text-align:center;}
.header__menu-link:hover{background:rgba(255, 255, 255, 0.2);}
.header__menu-link:first-child{margin-top:70px;}
.header__menu-link:last-child{margin-bottom:0px;}
.header__menu-link:active{top:0;}
.header__menu_visible .header__menu-link{opacity:1;}
.header__menu-link:nth-last-child(2){margin-left:auto;}
.header__menu-link:hover:after,
.headerWhite.header .header__menu .header__menu-link:hover:after{width: auto;}
.header__menu-link:after{position:absolute;bottom:0;left:30px;right:30px;width:auto;background:rgba(255, 255, 255, 0.3);}
.header__menu-link:last-child:after{background:transparent;}
/**/.header__social-mobile-control{display:block;position:absolute;z-index:100;top:0;right:0;width:90px;height:70px;background:url('../images/social.svg') no-repeat 28px 50%;cursor:pointer;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
.header_white .header__social-mobile-control,
.headerWhite .header__social-mobile-control{background:url('../images/social2.svg') no-repeat 36px 50%;}
.header__social-mobile-control_active{background:url('../images/social.svg') no-repeat 18px 50%, #fff !important;}
.header__social{display:block;position:absolute;z-index:100;top:70px;right:0;overflow:hidden;visibility:hidden;}
.header__social_visible{display:block;visibility:visible;}
.header__social-link{position:relative;display:block;padding:0 80px 0 30px;line-height:60px;font-size:20px;font-weight:600;color:#fff !important;background:#fff;text-align:right;text-decoration:none;transform:translateX(100%);transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
.header__social-link:after{position:absolute;content:'';bottom:0;left:30px;right:30px;height:1px;background:rgba(255, 255, 255, 0.3);}
.header__social-link:last-child:after{width:0;}
.header__social_visible .header__social-link{transform:translateX(0);}
.header__social-link:nth-child(1){transition-delay:40ms;}
.header__social-link:nth-child(2){transition-delay:80ms;}
.header__social-link:nth-child(3){transition-delay:120ms;}
.header__social-link:nth-child(4){transition-delay:160ms;}
.header__social-link:nth-child(5){transition-delay:200ms;}
.header__social-link:nth-child(6){transition-delay:240ms;}
.header__social-link img{position:absolute;right:30px;top:50%;transform:translateY(-50%);}
}
@media only screen and (max-width:449px){.header__content:after{left:20px;right:20px;}
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

<div itemscope itemtype="http://schema.org/Periodical" class="blogPost">

    <div style="display: none">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope
                itemtype="http://schema.org/ListItem">
                <a itemscope itemtype="http://schema.org/Thing"
                   itemprop="item" href="https://lab3m.com/">
                    <span itemprop="name">lab3m</span>
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
                   itemprop="item" href="https://lab3m.com/blog/<?=$model->seo_url?>">
                    <span itemprop="name"><?=$model->title?></span>
                    </a>
                <meta itemprop="position" content="3" />
            </li>
        </ol>
    </div>
    <div class="head"><?=$model->title?> AAAAAAAAAAAAAAA
        <div class="background" style="background-image: url('<?=$metaimage?>');">
            <div class="overlay"></div>
        </div>
        <div class="content1">
            <div class="info">
<!--                <span class="date">Jul 15, 2016</span>-->
            </div>
            <h1>
                <?=$model->title?>
            </h1>
            <div class="tagList">
                <!--                <a href="/blog" class="tag">Avoid lightning bolt</a>-->
            </div>
        </div>
        <div class="content2">
            <div class="photo">
                <img itemprop="image" data-src="/images/blog/team.png" alt="team">
            </div>
            <div class="info">
                <span itemprop="publisher" class="position">lab3m</span>
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
    <?= $this->render('//layouts/_blog_random',['relatedPosts'=>$relatedPosts,'lang'=>$lang]) ?>
</div>
