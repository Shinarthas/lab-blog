<?php
use yii\helpers\Url;
use yii\helpers\Html;
use frontend\assets\AppAsset;
use common\models\MetaTag;

AppAsset::register($this);
\common\models\User::history();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta http-equiv="Cache-Control" content="max-age=2592000">
    <meta name="viewport" content="width=device-width">
    <meta name="google-site-verification" content="OPK-efEzfiud1Vo0Pk4kdbC8HRRThrJTIrU6kwUZ7yE" />
    <meta name="msvalidate.01" content="D53089FDB0722788E11DEF0969B456EC" />
	<meta property="twitter:card" content="summary_large_image" class="next-head">
	
	<? if($important_meta = MetaTag::findOne(['url' => \Yii::$app->request->url])):?>
        <?php $url= Yii::getAlias('@front').'/'.Yii::$app->language.'/'.\Yii::$app->request->pathInfo;?>
	<meta name="title" content="<?= Html::encode($important_meta->title) ?>">
	<meta property="og:title" content="<?= Html::encode($important_meta->title) ?>">
	<title><?= Html::encode($important_meta->title) ?></title>
		
	<meta property="og:type" content="website" class="next-head">
	<meta property="og:image" content="<?=Yii::getAlias('@front')?>/images/temp/<?=$important_meta->img;?>" class="next-head">
	<meta property="og:url" content="<?=$url ?>" class="next-head">
	<meta property="og:type" content="website" class="next-head">

	<meta name="description" content="<?=$important_meta->description;?>">
	<meta property="og:description" content="<?=$important_meta->description;?>">
	<link type="image/png" href="/images/temp/<?=$important_meta->img;?>" rel="image_src">
	<meta property="twitter:image" content="/images/temp/<?=$important_meta->img;?>" class="next-head">
	<meta property="twitter:image:src" content="/images/temp/<?=$important_meta->img;?>" class="next-head">
	<? $this->metaTags = null;?>
	
	<? else: ?>
	
	<meta name="title" content="<?= Html::encode($this->title) ?>">
	<meta property="og:title" content="<?= Html::encode($this->title) ?>">
	<title><?= Html::encode($this->title) ?></title>
	
	<? endif; ?>

	<?php $this->head() ?>
	
    <?= Html::csrfMetaTags() ?>
<!--    <meta name="keywords" content="apps developers, mobile apps developers, mobile app developers, it outsourcing company, iphone application development companies, app develop, mobile apps developer, it outsource, outsourced it services, outsource it services, iphone application development services, application development companies, iphone app programmer, app developers, iphone app developer company, apps developer, mobile application developer, it outsourcing services, mobile application developers">-->
<!--    <link href="--><?//= Yii::$app->request->absoluteUrl ?><!--" rel="alternate" hreflang="en-US">-->

    <link href="/favicon.ico" rel="icon shortcut" type="image/png">
 <!--   <link href="/favicon.ico" rel="apple-touch-icon"> --->
    <link rel="stylesheet" href="/fonts/fonts.css">
    <!-- <link rel="stylesheet" href="/normalize.css"> -->
    <!-- <link rel="stylesheet" href="/styles/main-top.css"> -->
    <style>
    .header__menu-mobile-control {
        z-index: 9999999!important;
    }
    html{
        background-color: #151515!important;
    }
    </style>
    <style>
    html{
        width: 100%!important;
        overflow-x: hidden!important;
    }
    body{overflow-x: hidden}
</style>

    <!--<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="/fonts/fonts.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script-->


</head>

<body class="cookieconsent">
<?php $this->beginBody() ?>


    <?php /*$this->render('//layouts/_loader')*/ ?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?>
<?=$this->render("../blog/_styles");?>
<style>
    .dis-n1{
        display:block!important;
    }
    .dis-b1{
        display:none!important;
    }
    @media (max-width: 767.98px) {
        .dis-n1{
            display:none!important;
        }
        .dis-b1{
            display:block!important;
        }
    }
</style>
    <div class="siteWrapper">
        <?php if(isset($this->params['breadcrumbs']) && count($this->params['breadcrumbs'])){?>
            <div class="head">
                <div class="container"  style="max-width: 1200px; text-align: center;">
                    <div class="col-12" style="text-align: left;">
                        <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope
                                itemtype="http://schema.org/ListItem">
                                <a itemscope itemtype="http://schema.org/Thing"
                                   itemprop="item" href="<?=Yii::$app->homeUrl?>">
                                    <span itemprop="name"><?=Yii::t('app','go_to_main')?></span>
                                </a>
                                <meta itemprop="position" content="1" />
                            </li>
                            <?php for($i=0;$i<count($this->params['breadcrumbs']);$i++) ?>
                            <?php foreach ($this->params['breadcrumbs'] as $breadcrumb){ ?>
                                <li itemprop="itemListElement" itemscope
                                    itemtype="http://schema.org/ListItem">
                                    <a itemscope itemtype="http://schema.org/Thing"
                                       itemprop="item" href="<?=$breadcrumb['url']?>">
                                        <span itemprop="name"><?=$breadcrumb['label']?></span></a>

                                    <meta itemprop="position" content="<?=$i+1?>" />
                                </li>
                            <?php }  ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?= $content ?>

        <?php if (Yii::$app->controller->id == 'works'): ?>
            <?= $this->render('//layouts/_blockTouch') ?>
        <?php endif ?>
    </div>
    <div hidden class="contactPopupMessage">
        <div class="contactsPopup">
            <img class="letter" src="/images/contacts/happy_mail.svg" alt="letter">
            <img class="like" src="/images/contacts/like.svg" alt="like">
            <h2>Get The Latest Updates</h2>
            <div class="arrow"></div>
            <div class="status-container"></div>
            <form action="">
                <input class="email" type="email" placeholder="Enter your email address" required>
                <input class="sub" type="submit" value="Subscribe">
            </form>
        </div>
        <div class="closeMess">
            <img src="/images/contacts/close.popup.svg" alt="close">
        </div>
    </div>

    <?= $this->render('//layouts/_footer') ?>


<?php $this->endBody() ?>
<script>$(document).ready(function(){

        if (!!!localStorage.getItem("cookieconsent")) {
            console.log('wtf');
            document.body.classList.remove("cookieconsent")
        }
        $("button.cookie-bar__btn").click(function() {
            localStorage.setItem("cookieconsent", "ok")
            $(".cookie").fadeOut();
        });
    });</script>
<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-71719542-1', 'auto');
    ga('send', 'pageview');
</script>

</body>
</html>
<?php $this->endPage() ?>
