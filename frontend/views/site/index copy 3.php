<?php
use frontend\widgets\MultiLang\MultiLang;
$description = 'Team of professionals that develops native iOS and Android apps of any complexity.';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $description,
]);

$this->title = 'We design and develop apps native iOS and Android apps';
?>
<?php 
//  $this->registerCssFile("/styles/home.css");
?>

<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">



<?=$this->render("../blog/_styles");?>
<!-- Load CSS Compilled without JS -->
<noscript><link rel="stylesheet" href="/styles/home.css"></noscript>
    <!--<div id="preloader">
        <div class="load-per-sent">0%</div>
        <canvas id="canvas" width="160" height="160"></canvas>
        <div class="preloader-clouds"></div>
    </div>-->
<style>
.container{
    max-width: 1600px!important;
}
</style>
<div class="header">


</div>
<link href="//db.onlinewebfonts.com/c/2206d6cc490084998d531e8c1b2cbb4a?family=Druk+Wide+Bold" rel="stylesheet" type="text/css"/>
<section class="first-screen">
	<video class="bg-video" preload="metadata" autoplay="autoplay" playsinline loop="loop" muted="muted" style="opacity: 0.1;">
	        <source src="/videos/bgvideo.webm" type="video/webm">
	    </video>
    <div class="container">
        <div class="row">
            <div class="first-screen1">
                <div style="display:none" class="first-screen__light"></div>
                <div class="first-screen__textures">
                    <img style="display:none" class="first-screen__thunderrise" src="/images/main/logo.png" alt="thunderrise">
                    <img class="first-screen__flash" src="/images/logo-b.png" alt="flash">
                </div>
                
                <div class="first-screen__fixed">
                    <div class="first-screen__content">
                    <div style="background-color:#6927FF; width:30%; height: 1px; margin-bottom: 15px"></div>
                        <h1 class="first-screen__title" style="font-family: Druk Wide Bold;letter-spacing: 0.1em;"></h1><p style="height: 145px;" class="multipleStrings first-screen__title" style="letter-spacing: 0.1em;"></p>
                        <div style="background-color:#6927FF; width:40%; height: 1px; margin-top: 15px"></div>
                        <!--<p class="first-screen__desc">Native iOS and Android apps</p>-->
                        <!-- <div class="button-sic__item">getit-btn
                            <a href="/contacts" class="button-sic__link">Request a free estimate</a>
                        </div> -->
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/typeit@6.1.1/dist/typeit.min.js"></script>
                <script>
                new TypeIt(".multipleStrings", {
                strings: ["<?= Yii::t('app', 'Efficacy') ?>,", "<?= Yii::t('app', 'Transparency') ?>,", "<?= Yii::t('app', 'Secure') ?>"],
                speed: 150,
                waitUntilVisible: true,
                loop:true,
                }).go();
                </script>
            </div>
        </div>
    </div>
    <div style="display:none" class="first-screen__clouds"></div>
</section>

<section class="second-screen">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="second-screen__content">
                <div class="second-screen__mass-media" style="margin-bottom: 70px">
                    <img src="/images/sp1.png" alt="tnw">
                    <img src="/images/sp3.png" alt="tc">
                </div>
                <div class="second-screen__hr"><p><?= Yii::t('app', 'Clients') ?></p></div>
                <div class="second-screen__logo"><img src="/images/main/logo.png" alt="thunderrise"></div>
                <p class="second-screen__title" style="margin-top: 32px"><img src="/images//lab3m.png" alt="lab3m"></p>
                <div class="second-screen__arrow"></div>
                <div class="second-screen__deploy">
                    <p class="second-screen__desc" style="color: #fff; margin: 18px 0">
                        <?= Yii::t('app', 'main_text1') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="first-screen" style="height: 120vh;">
    <div class="container">
        <div class="row">
            <div class="first-screen1">
                <div class="first-screen__fixed">
                    <div class="first-screen__content" style="padding-top: 60px;max-width: 1600px;">
                    <div class="row" style="padding: 0 15px">
        <div class="col-12 text-center" style="">
            <h2 style="font-style: normal;    letter-spacing: 2px;
font-weight: bold;
font-size: 48px;
line-height: 58px;
color: #FFFFFF; margin-bottom: 0; margin-top: 40px"><?= Yii::t('app', 'main_text2') ?></h2>
<div class="second-screen__arrow"></div>
<h2 class="dis-none-t" style="color:#fff;font-size: 24px;"><?= Yii::t('app', 'main_text3') ?></h2>

        </div>
        <div class="col-12 col-lg-3" style="margin-top: 20px;">
        <img style="margin-bottom: 20px;    max-width: 280px;" class="img-fluid dis-none-t" src="/images/trade.png" alt="trade">
        <h2 style="color: #fff; font-size: 24px; color: #FFFFFF; line-height: 29px;" class="mb-4"><?= Yii::t('app', 'main_text4') ?></h2>
        <p class="dis-none-t" style="font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 150%;
letter-spacing: 0.1em;
color: #FFFFFF;"><?= Yii::t('app', 'main_text5') ?></p>
<?= Yii::t('app', 'main_text6') ?>
<div class="text-c1 dis-none-t" style="width:100%;
    text-align: left;padding: 30px;"><a style="color: white;
    background: #6927ff;
    padding: 15px 30px;
    border-radius: 50px;" href="/solutions"><?= Yii::t('app', 'main_text7') ?></a></div>
        </div>
        <div class="col-12 col-lg-8" style="margin-top: 20px;">
        <video style="width:100%" preload="metadata" autoplay="autoplay" playsinline loop="loop" muted="muted">
            <source src="/images/trade.webm" type="video/webm">
        </video>
        <p class="disb-none-t" style="font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 150%;
letter-spacing: 0.1em;
color: #FFFFFF;"><?= Yii::t('app', 'main_text5') ?></p>
<div class="text-c1 disb-none-t" style="width:100%;
    text-align: left;padding: 10px;"><a style="color: white;
    background: #6927ff;
    padding: 15px 30px;
    border-radius: 50px;" href="/solutions"><?= Yii::t('app', 'main_text7') ?></a></div>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>

</style>

    <section style="background: #151515; padding:150px 15px">
	<div>
	    <div class="container">
	        <div class="row">
	        	<div>
                <div class="row" style="">
                <div class="col-12" style="text-align: center;">
                <h2 style="color: #fff!important;"><?= Yii::t('app', 'main_text8') ?></h2>
                <img src="/images/company/arrowgrey.png" alt="arrowgrey" class="arrowgrey">
                <p class="tagline"><?= Yii::t('app', 'main_text9') ?></p>
                </div>
                <?= Yii::t('app', 'main_text10') ?>
        
                <div class="col-12" style="display:none">
                    <h3 class="h3-style1">LATEST INSIGHTS</h3>
                </div>
                <div style="display:none" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
    </div>
    <div class="carousel-item">
    <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">2Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">2Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">2Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
    </div>
  </div>
</div>
                <!--<div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>-->
            </div>
	            </div>
	        </div>
	    </div>
    </div>
</section>

    <style>
        .h-style1{
            font-size: 24px;
            line-height: 33px;
            font-weight: normal;
            color: #fff;
            letter-spacing: 0;
        }
        .h-style2{
            font-size: 18px;
            line-height: 23px;
            font-weight: normal;
            color: #fff;
            letter-spacing: 0;
        }
        .p-style1{
            font-size: 14px;
            line-height: 20px;
            font-weight: normal;
            color: #b4b4b4;
            letter-spacing: 0;
        }
        .h3-style1{
            font-size: 16px;
            letter-spacing: 1.83px;
            line-height: 18px;
            font-weight: normal;
            color: #b4b4b4;
            padding: 16px 0;
            margin:0;
        }
        .h-style3{
            padding: 16px 0;
            margin:0;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 58px;
            /* identical to box height */


            color: #FFFFFF;
        }
        .p-style3{
            font-style: normal;
            font-weight: bold;
            font-size: 20px;
            line-height: 140%;
            color: #6927FF;
        }
    </style>

    <?= Yii::t('app', 'main_text11') ?>
    <section style="background-color: #151515; height: 150px">
    </section>
<!--<script>

    var canvas = document.querySelector('#canvas');
    var ctx = canvas.getContext('2d');
    var pi = Math.PI;
    var per_cent = 0;

    ctx.lineWidth = 10;
    ctx.strokeStyle = '#fff';

    var images = document.images;
    var images_count = images.length;
    var loaded_images = 0;
    var load_per_sent = document.querySelector('.load-per-sent');

    for(let i=0; i<images_count; i++){
        image_clone = new Image();
        image_clone.onload = img_loaded;
        image_clone.src = images[i].src;
    }

    function img_loaded(){
        loaded_images++;
        load_per_sent.innerHTML = (( (100/images_count) * loaded_images ) << 0 ) + '%';
        per_cent = ( (100/images_count) * loaded_images ) << 0 ;
        ctx.beginPath();
        ctx.clearRect(0,0,160,160)
        ctx.arc(80, 80, 70, 0, per_cent*pi/50, false);
        ctx.stroke();
    
        if(loaded_images == images_count){
             var preloader = document.querySelector('#preloader');
                preloader.style.animation = 'preloaderHide 1s linear';

            setTimeout(function(){
                preloader.style.display = 'none';
            }, 600);

        }

    }

</script>-->
<style>
    
@media (max-width: 767px){
    .dis-none-t{
        display: none;
    }
    .text-c1{
        text-align: center!important;
    }
    
}
@media (min-width: 768px){
    .disb-none-t{
        display: none;
    }
    
}
.footer{display: none!important;}
</style>
<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
		//var mt=document.createElement("link");mt.rel="stylesheet";
ms.href="/styles/home.css";document.getElementsByTagName("head")[0].appendChild(ms);
//mt.href="/styles/app.css";document.getElementsByTagName("head")[0].appendChild(mt);
</script>
<!-- Load Scripts -->
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
	{"src" : "/scripts/case.js", "async" : false},
	{"src" : "/scripts/app.js", "async" : false}
	]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr); 
</script>
