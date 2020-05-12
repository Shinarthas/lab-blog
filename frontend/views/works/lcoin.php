<?php
$this->title = ucfirst("lab3m project - Lcoin. Lcoin - future of cryptocurrencies!");

/*$this->registerJsFile('/scripts/jquery-1.12.4.min.js');
$this->registerJsFile('/scripts/mCustomScrollbar.min.js');*/

/*$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/mCustomScrollbar.css");*/
/*$this->registerCssFile("/styles/app.min.css");*/

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Lcoin, We develop native iOS and Android apps, TennisHub’s SaaS solution helps tennis businesses streamline operations and drive paid on-court activities'
]);


$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('app','text_header_solutions'),
    'url'=>\yii\helpers\Url::toRoute('/solutions')
);

$this->params['breadcrumbs'][] = array(
    'label'=> 'BIKI DEX',
    'url'=>\yii\helpers\Url::toRoute('/exchangebiki')
);

?>
<style>
body .container{max-width: 990px;width: 100%;}
.main{
    position: relative;
    z-index: 101;
}
.main .arrow{
    margin: 12px 0;
    height: 10px;
    background: url(../images/arrow/white.svg) no-repeat 50% 50%;
}
.main .grey{
    background: url(../images/arrow/grey.png) no-repeat 50% 50%;
}
.main .top-border{
    border-top: 1px solid #c8b4a5;
    margin: 70px 0;
}
.main1{
    background-color: #1d1d1d;
    text-align: center;
    height: 1109px;
    overflow: hidden;
    /* border-bottom: 1px solid #000; */
}

.main1::before{
    content: "";
    background: linear-gradient(360deg, #000, transparent);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 1109px;
    z-index: 1;
}

.video_taxi{
    height:130%;
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;

}

.main1 h1{
    font: 70px 'Raleway Bold', sans-serif;
    margin-top: 80px;
    color: #fff;
}
.main1 h2{
    color: #665900;
    font: 27px/40px 'Work Sans', sans-serif;
    margin: 13px 0 59px;
    color: #fff;
}
.main1 p{
    text-align: center;
    max-width: 760px;
    margin: 0 auto;
    font: 18px/36px 'Work Sans', sans-serif;
    color: #fff;
    position: absolute;
    left: 50%;
    margin-left: -373px;
    z-index: 1;
}
.main1 .top-img{
    position: absolute;
    bottom: -80px;
    left: 50%;
    transform: translate(-50%);
    z-index: 1;
}
.main1 .video{position: absolute;bottom: 3px;left: 50%;width: 296px;transform: translateX(-141px);}
.main2{
    text-align: center;
    padding: 50px 0;
}
.main2 h2{
    font: 42px 'Work Sans', sans-serif;
    color: #fff;
    margin: 40px 0 19px;
}
.main2 h4{
    font: 13px 'Work Sans', sans-serif;
    color: #fff;
    margin: 18px 0 67px 6px;
    letter-spacing: 1.9px;
    text-transform: uppercase;
}
.main2 ul{
    padding: 0;
    list-style-position: inside;
    margin-bottom: 0;
}
.main2 ul li, .main2 p{
    font: 18px/36px 'Work Sans', sans-serif;
    color: #fff;
    text-align: left;
}
.main2 b{
    font-family: 'Raleway Bold', sans-serif;
}

@media (max-width: 1662px){
    .video_taxi{
        left: -7%;
    }
}

@media (max-width: 1440px){
    .video_taxi{
        left: -16%;
    }
}

@media (max-width: 1368px){
    .video_taxi{
        left: -38%;
    }
}

@media (max-width:991px){
.top-header{position:fixed;top:0;left:0;right:0;width:100%;}

    .video_taxi{
        left: -53%;
    }

}
@media only screen and (max-width:767px){
    .main1{
        height: auto;
        padding: 0 0 100px;
    }
    .main1 .top-img,
    .main1 .video{
        display: none;
    }

    .video_taxi{
        left: -12%;
    }

    .main1 p{
        left: 0;
        margin: 0;
    }
}

@media (max-width: 620px){
    .video_taxi{
        left: -38%;
    }
}

@media (max-width: 550px){
    .video_taxi{
       
    }
}

@media only screen and (max-width: 449px){

    .main1 h1{
        font-size: 48px;
    }
    .main1 h2{
        font-size: 22px;
    }
}

@media (max-width: 320px){
    .video_taxi{
       left: -142%;
    }
}
</style>
<!-- <?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?> -->
<section class="main main1" style="overflow: hidden;">

<!-- <video src="/videos/D40_29_093_comp.mp4" autoplay loop class="video_taxi"></video> -->

   <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?= Yii::t('app', 'dex_name') ?></h1>
                <div class="arrow grey"></div>
                <h2><?= Yii::t('app', 'dex_des') ?></h2>
                <p><?= Yii::t('app', 'dex_sub_des') ?></p>
            </div>
        </div>
    </div>
    <img class="top-img" data-src="/images/cases/lcoin/top-lcoin.png" alt="Lcoin gadget">
    <!-- <video class="video" preload="metadata" autoplay="autoplay" playsinline loop="loop" poster="">
        <source src="/videos/lcoin.mp4" type='video/mp4;'>
    </video> -->
</section>
<section class="main main2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><?= Yii::t('app', 'dex_Product_Details') ?></h2>
                <div class="arrow"></div>
                <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
                <?= Yii::t('app', 'dex_Main_text_des1') ?>
            </div>
        </div>
    </div>
</section>

<div class="col-12" style="text-align: center;"><img class="img-fluid" style="padding: 0 35px;" data-src="/images/biki.png" alt="biki"></div>
<section class="main main5">
    <div class="container">
        <div class="row">
        <?= Yii::t('app', 'dex_Main_Features_All') ?>
        </div>
    </div>
</section>
<section class="main main5">
    <div class="container">
        <div class="row">
        <?= Yii::t('app', 'dex_Main_mission') ?>
        </div>
    </div>
</section>
<section class="main main9" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2><?= Yii::t('app', 'dex_Main_Features') ?></h2>
            <div class="arrow grey"></div>
            <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/lcoin/purse.svg" alt="purse">
                </div>
                <p class="title"><?= Yii::t('app', 'dex_Main_Features_name_1') ?></p>
                <span><?= Yii::t('app', 'dex_Main_Features_name_1_des') ?></span>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/lcoin/left-right.svg" alt="left-right">
                </div>
                <p class="title"><?= Yii::t('app', 'dex_Main_Features_name_2') ?></p>
                <span><?= Yii::t('app', 'dex_Main_Features_name_2_des') ?></span>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/lcoin/discover.svg" alt="discover">
                </div>
                <p class="title"><?= Yii::t('app', 'dex_Main_Features_name_3') ?></p>
                <span><?= Yii::t('app', 'dex_Main_Features_name_3_des') ?></span>
            </div>
        </div>
    </div>
</section>
<section class="main main8"  style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2><?= Yii::t('app', 'dex_Main_Features_Inspiration') ?></h2>
            <div class="arrow arrow-ginger"></div>
            <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
            </div>
            <div class="col-sm-4 pr1">
                <div class="img">
                    <img data-src="/images/cases/lcoin/Letter.svg" alt="Letter">
                </div>
                <!-- <p>Letter</p> -->
            </div>
            <div class="col-sm-4 pr2">
                <div class="img">
                    <img data-src="/images/cases/lcoin/Coin.svg" alt="Coin">
                </div>
                <!-- <p>Coin</p> -->
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/lcoin/L-coin.svg" alt="Lcoin">
                </div>
                <!-- <p>Lcoin</p> -->
            </div>
        </div>
    </div>
</section>
<section class="main main10">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <h2><?= Yii::t('app', 'dex_Iconography_name') ?></h2>
            <div class="arrow"></div>
            <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
            </div>
        </div>
        <div class="col6"><img data-src="/images/cases/lcoin/Iconography/1.png" alt="circle"></div>
        <div class="col6"><img data-src="/images/cases/lcoin/Iconography/2.png" alt="table"></div>
        <div class="col6"><img data-src="/images/cases/lcoin/Iconography/3.png" alt="settings"></div>
        <div class="col6"><img data-src="/images/cases/lcoin/Iconography/4.png" alt="info"></div>
        <div class="col6"><img data-src="/images/cases/lcoin/Iconography/5.png" alt="purse-black"></div>
        <div class="col6"><img data-src="/images/cases/lcoin/Iconography/6.png" alt="clock"></div>
        <div class="col6"><img data-src="/images/cases/lcoin/Iconography/7.png" alt="clock"></div>
    </div>
</section>
<section class="main main11"  style="background: #151515;">
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
                        <img data-src="/images/techy/1.png" alt="javascript">
                    </div>
                    <!--<p class="title">JavaScript</p>-->
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/techy/2.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/techy/3.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/techy/4.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/techy/5.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/techy/6.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/techy/7.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img data-src="/images/techy/8.png" alt="javascript">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/styles/lcoin.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/mCustomScrollbar.min.js", "async" : false},
    {"src" : "/scripts/customScroll.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
