<?php
$description = Yii::t('app','meta_portfolio_description');
$this->title = ucfirst(Yii::t('app','meta_portfolio_title'));
$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $description
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => 'https://lab3m.com/images/l3m-t.png',
],'og_image');

$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('app','text_header_solutions'),
    'url'=>\yii\helpers\Url::toRoute('/solutions')
);

$this->params['breadcrumbs'][] = array(
    'label'=> 'Trade3m',
    'url'=>\yii\helpers\Url::toRoute('/trade3m')
);


?>


<style>
    body .container {
        max-width: 990px;
        width: 100%;
    }

    .main {
        position: relative;
    }

    .main .arrow {
        margin: 12px 0;
        height: 10px;
        background: url(../images/arrow/white.svg) no-repeat 50% 50%;
    }

    .main1 {
        background-color: #151515;
        text-align: center;
        height: 1109px;
        overflow: hidden;
    }

    .main1 .top-img {
        position: absolute;
        bottom: -122px;
        left: 50%;
        -webkit-transform: translate(-50%);
            -ms-transform: translate(-50%);
                transform: translate(-50%);
    }

    .main1 h1 {
        font: 70px 'Raleway Bold', sans-serif;
        margin-top: 80px;
    }

    .main1 h2 {
        color: #665900;
        font: 27px/40px 'Work Sans', sans-serif;
        margin: 13px 0 59px;
    }

    .main1 p {
        text-align: center;
        max-width: 760px;
        margin: 0 auto;
        font: 18px/36px 'Work Sans', sans-serif;
        color: #665900;
    }

    .main1 .video {
        position: absolute;
        bottom: -22px;
        left: 50%;
        width: 294px;
        -webkit-transform: translateX(-17px);
            -ms-transform: translateX(-17px);
                transform: translateX(-17px);
    }

    .main2 {
        padding: 140px 0 176px;
        text-align: center;
    }

    .main2 h2 {
        font: 42px 'Work Sans', sans-serif;
        color: #fff;
        margin: 40px 0 19px;
    }

    .main2 h4 {
        font: 13px 'Work Sans', sans-serif;
        color: #fff;
        margin: 18px 0 67px 6px;
        letter-spacing: 1.9px;
    }

    .main2 .cont-wrap {
        text-align: left;
    }

    .main2 .cont-wrap * {
        font: 18px/36px 'Work Sans', sans-serif;
        color: #fff;
        margin: 0;
    }

    .main2 .cont-wrap ul {
        padding: 0;
        list-style-position: inside;
    }

    .main8 ul {
        padding: 0;
        list-style-position: inside;
    }

    .main8 ul {
        text-align: left!important;
        font: 18px/36px 'Work Sans', sans-serif;
        color: #fff;
    }

    .main .arrow-ginger {
        background: url(/images/arrow/orange.svg) no-repeat 50% 50%;
    }

    .main .arrow-yellow {
        background: url(/images/arrow/yellow.svg) no-repeat 50% 50%;
    }

    @media only screen and (max-width: 767px) {
        .main1 {
            height: auto;
            padding: 0 0 100px;
        }
    }

    @media only screen and (max-width: 449px) {
        .header__content:after {
            left: 20px;
            right: 20px;
        }
    }

</style>
<?=$this->render("../blog/_styles");?>
<!-- Load CSS Compilled without JS -->
<noscript><link rel="stylesheet" href="/styles/home.css"></noscript>
<style>
html{
    background-color: #151515!important;
}
.min-vis1{
        display: none!important;
    }
}
.max-vis1{
        display: black!important;
    }
}

</style>
<style>
@media(max-width: 767px){
    .main1{
        padding: 0 0 340px!important;
    }
    .main1 .top-img {
        bottom: 0px!important;
    }
    .min-vis1{
        display: block!important;
    }
    .max-vis1{
        display: none!important;
    }
    h2{
        font-size: 32px!important;
    }
}
</style>
<section class="main main1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="color:#fff">Trade3M</h1>
                <div class="arrow"></div>
                <h2 style="color:#fff"><?= Yii::t('app', 'text_portfolio_sub') ?></h2>
                <p style="color:#fff"><?= Yii::t('app', 'text_portfolio_description') ?></p>
            </div>
        </div>
    </div>
    <?= Yii::t('app', 'img-trader1') ?>
</section>
<section class="main main2" style="background: #151515;padding-bottom: 0;">
    <div class="container" style="padding-bottom: 50px;">
        <div class="row">
            <div class="col-sm-12">
                <?= Yii::t('app', 'html_portfolio_info') ?>
            </div>
        </div>
    </div>
</section>

<style>
.first-screen1{position: absolute;top: 0;left: 0;width: 100%;height: 100%;clip: rect(auto,auto,auto,auto);}
.first-screen{background:#0D0D0D;position:relative;height: 700px;}
.first-screen__title{line-height:50px;font-size:40px;color:#ffffff;font-family:'Raleway Bold', sans-serif;margin:0;}
.first-screen__fixed{position:fixed;top:0;left:0;right:0;}
.first-screen__desc{line-height:40px;font-size:25px;color:#ffffff;margin-bottom:14px; margin-top: 0;}
.first-screen__content{margin:0 auto;padding-top:240px;max-width:960px;}
.first-screen__textures{position:fixed;z-index:101;top:0;left:0;right:0;height:730px;pointer-events:none;}
.first-screen__lab3m{position:absolute;top:384px;left:calc(50% - 128px);-moz-left:calc(50% - 128px);width:685px;}
.first-screen__flash{position:absolute;left:48%;left:calc(50% + 15px);width:554px;z-index:2;}
</style>
<style>
            #ios1,#ios2,#ios3{
                padding: 40px 0 0!important;
            }
        </style>
<!-- Desktop -->
<section id="des1" class="first-screen main7" style="height: 120vh;">
    <div class="container">
        <div class="row">
            <div class="first-screen1">
                <div class="first-screen__fixed">
                    <div class="first-screen__content pad-sec-cor" style="padding-top: 10vh;max-width: 1200px;">
                    <div class="row" style="padding: 0 15px">
                        <div class="col-12"><h2 style="margin: 0 0 35px 0;
                    text-align: center;color:#fff; margin-bottom:35px;"><?= Yii::t('app', 'text_portfolio_automatic_title') ?></h2></div>
                    <?= Yii::t('app', 'html_portfolio_automatic_description') ?>
                        
                        <div class="col-12" style="margin: 30px 0; ">
                        <?= Yii::t('app', 'video-t1') ?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- IOS -->
<section id="ios1" class="main7" style="background: #151515">
    <div class="container">
        <div class="row">
            <div class="first-screen__content pad-sec-cor" style="padding-top: 10vh;max-width: 1200px;">
                <div class="row" style="padding: 0 15px">
                    <div class="col-12"><h2 style="margin: 0 0 35px 0;
                text-align: center;color:#fff; margin-bottom:35px;"><?= Yii::t('app', 'text_portfolio_automatic_title') ?></h2></div>
                <?= Yii::t('app', 'html_portfolio_automatic_description') ?>
                    
                    <div class="col-12" style="margin: 30px 0; ">
                    <?= Yii::t('app', 'video-t1') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
@media(min-width: 1200px){
    .pad-sec-cor{
        padding-top: 5vh!important;
    }
}
</style>
<!-- Desktop -->
<section  id="des2" class="first-screen main7" style="height: 120vh; background: #151515">
<div class="container">
        <div class="row">
            <div class="first-screen1">
                <div class="first-screen__fixed">
                    <div class="first-screen__content pad-sec-cor" style="padding-top: 10vh;max-width: 1200px;">
                    <div class="row" style="padding: 0 15px">
        <div class="col-12"><h2 style="margin: 0 0 35px 0;
    text-align: center;color:#fff; margin-bottom:35px"><?= Yii::t('app', 'text_portfolio_custody_title') ?></h2></div>
    <?= Yii::t('app', 'html_portfolio_custody_description') ?>
        
        <div class="col-12" style="margin: 30px 0; ">
        <?= Yii::t('app', 'video-t2') ?>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- IOS -->
<section id="ios2" class="main7" style="background: #151515">
<div class="container">
        <div class="row">
            <div class="first-screen__content pad-sec-cor" style="padding-top: 10vh;max-width: 1200px;">
                <div class="row" style="padding: 0 15px">
                    <div class="col-12"><h2 style="margin: 0 0 35px 0;
                text-align: center;color:#fff; margin-bottom:35px"><?= Yii::t('app', 'text_portfolio_custody_title') ?></h2></div>
                <?= Yii::t('app', 'html_portfolio_custody_description') ?>
                    <div class="col-12" style="margin: 30px 0; ">
                    <?= Yii::t('app', 'video-t2') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<!-- Desktop -->
<section id="des3" class="first-screen main7" style="height: 120vh; background: #0D0D0D">

<div class="container">
        <div class="row">
            <div class="first-screen1">
                <div class="first-screen__fixed">
                    <div class="first-screen__content pad-sec-cor" style="padding-top: 10vh;max-width: 1200px;">
                    <div class="row" style="padding: 0 15px">
        <div class="col-12"><h2 style="margin: 0 0 35px 0;
    text-align: center;color:#fff; margin-bottom:35px"><?= Yii::t('app', 'text_portfolio_management_title') ?></h2></div>
    <?= Yii::t('app', 'html_portfolio_management_description') ?>
        
        <div class="col-12" style="margin: 30px 0; ">
        <?= Yii::t('app', 'video-t3') ?>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- IOS -->
<section id="ios3" class="main7" style="background: #151515">
<div class="container">
        <div class="row">
            <div class="first-screen__content pad-sec-cor" style="padding-top: 10vh;max-width: 1200px;">
                <div class="row" style="padding: 0 15px">
                    <div class="col-12"><h2 style="margin: 0 0 35px 0;
                text-align: center;color:#fff; margin-bottom:35px"><?= Yii::t('app', 'text_portfolio_management_title') ?></h2></div>
                <?= Yii::t('app', 'html_portfolio_management_description') ?>
                    <div class="col-12" style="margin: 30px 0; ">
                    <?= Yii::t('app', 'video-t3') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .dis-none{
        display:none!important;
    }
</style>
<script>
  if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
    document.getElementById('des1').remove();
    document.getElementById('des2').remove();
    document.getElementById('des3').remove();
  } else {
    document.getElementById('ios1').remove();
    document.getElementById('ios2').remove();
    document.getElementById('ios3').remove();
  }
</script>


<section class="main main8" style="background: #151515; display: none;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><?= Yii::t('app', 'text_portfolio_backend_title') ?></h2>
                <div class="arrow arrow-ginger"></div>
                <h4><?= Yii::t('app', 'text_portfolio_backend_title') ?></h4>
                <p><?= Yii::t('app', 'text_portfolio_backend_list1') ?></p>
				<p><?= Yii::t('app', 'text_portfolio_backend_list2') ?></p>
                <?= Yii::t('app', 'html_portfolio_backend_description') ?>
            </div>
        </div>
    </div>
</section>
<section class="main main9" style="background: #151515;">
    <div class="container">
        <div class="row" style="margin: 0;">
            <div class="col-sm-12">
                <div class="col-12" style="text-align: center;"><img style="max-width: 280px;    width: 100%;padding: 0 25px;" data-src="/images/trade.png" alt="Lafka Basket"></div>
                <p><?= Yii::t('app', 'text_portfolio_trade3m') ?></p>
            </div>
        </div>
    </div>
</section>
<?= Yii::t('app', 'text_inspiration_trade3m') ?>

<section class="main main11"  style="background: #151515; display:none">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <h2><?= Yii::t('app', 'text_portfolio_services_title') ?></h2>
            <div class="arrow"></div>
            <h4><?= Yii::t('app', 'text_portfolio_services_description') ?></h4>
            </div>
            
        </div>
        <div class="col5"><img data-src="/images/serv/1.png" alt="Basket"></div>
        <div class="col5"><img data-src="/images/serv/2.png" alt="Bread"></div>
        <div class="col5"><img data-src="/images/serv/3.png" alt="Purse"></div>
        <div class="col5"><img data-src="/images/serv/4.png" alt="Meat"></div>
        <div class="col5"><img data-src="/images/serv/5.png" alt="Shield"></div>
        <div class="col5"><img data-src="/images/serv/6.png" alt="Reagent"></div>
        <div class="col5"><img data-src="/images/serv/7.png" alt="Car"></div>
        <div class="col5"><img data-src="/images/serv/8.png" alt="Apple"></div>
    </div>
</section>
<section class="main main12" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2><?= Yii::t('app', 'text_portfolio_technologies_title') ?></h2>
            <div class="arrow"></div>
            <h4><?= Yii::t('app', 'text_portfolio_technologies_description') ?></h4>
            </div>
            
            <div class="option">
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tech/1.png" alt="javascript">
                    </div>
                    <!--<p class="title">JavaScript</p>-->
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/tech/2.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/tech/3.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/tech/4.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/tech/5.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/tech/6.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/tech/7.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/tech/8.png" alt="javascript">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/styles/lafka.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/mCustomScrollbar.min.js", "async" : false},
    {"src" : "/scripts/customScroll.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
