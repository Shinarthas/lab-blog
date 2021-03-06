<?php
use frontend\widgets\MultiLang\MultiLang;
$description = Yii::t('app','meta_home_description');
$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $description,
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => 'https://lab3m.com/images/l3m-t.png',
],'og_image');
$this->title = Yii::t('app','meta_home_title');
?>
<?php 
?>

<?=$this->render("../blog/_styles");?>
<style>
.container{
    max-width: 1600px!important;
}
</style>
<div class="header">


</div>
<script src="/scripts/typeit.min.js"></script>
<style>
    @media(max-width: 991px){
        .t-cen-bag{
            text-align: center!important;
        }
        .first-screen__flash{
            display: none!important;
        }
    }
</style>
<section class="first-screen" style="z-index: 5;">
	<!-- <video class="bg-video" preload="metadata" autoplay="autoplay" playsinline loop="loop" muted="muted" style="opacity: 0.1;">
	        <source src="/videos/bgvideo.webm" type="video/webm">
	    </video> -->
    <div class="container">
        <div class="row">
            <div class="first-screen1">
                <div class="first-screen__textures">
                    <img class="first-screen__flash" data-src="/images/logo-b.png" alt="flash">
                </div>
                
                <div class="first-screen__fixed">
                    <div class="first-screen__content">
                    <div style="background-color:#6927FF; width:30%; height: 1px; margin-bottom: 15px"></div>
                        <p style="height: 145px;" class="multipleStrings first-screen__title" style="letter-spacing: 0.1em;"></p>
                        <div style="background-color:#6927FF; width:40%; height: 1px; margin-top: 15px"></div>
                    </div>
                </div>
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

<section class="second-screen" style="z-index: 990;">
    <div class="container">
        <div class="row" style="justify-content: center;">
            <div class="second-screen__content">
                <div class="second-screen__mass-media" style="margin-bottom: 70px">
                    <img style="max-width: 100%;" src="/images/sp1.png" alt="tnw">
                    <img style="max-width: 100%;" src="/images/sp3.png" alt="tc">
                </div>
                <div class="second-screen__hr"><p><?= Yii::t('app', 'Clients') ?></p></div>
                <div class="second-screen__logo"><img data-src="/images/main/logo.png" alt="lab3m"></div>
                <p class="second-screen__title" style="margin-top: 32px"><img data-src="/images//lab3m.png" alt="lab3m"></p>
                <div class="second-screen__arrow"></div>
                <div class="second-screen__deploy">
                    <div class="second-screen__desc" style="color: #fff; margin: 18px 0">
                        <?= Yii::t('app', 'main_text1') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media (max-width: 1199px){
    .dis-none-t-cor{
        display: none;
    }
}
</style>

<section class="first-screen" style="height: 120vh; z-index: 5">
    <div class="container">
        <div class="row">
            <div class="first-screen1">
                <div class="first-screen__fixed">
                    <div class="first-screen__content" style="padding-top: 15px;max-width: 1600px;">
                    <div class="row" style="padding: 0 15px;margin: 0;">
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
        <img style="margin-bottom: 20px;    max-width: 280px; width: 100%;" class="img-fluid dis-none-t" data-src="/images/trade.png" alt="trade">
        <h2 style="color: #fff; font-size: 24px; color: #FFFFFF; line-height: 29px;" class="mb-4"><?= Yii::t('app', 'main_text4') ?></h2>
        <p class="dis-none-t dis-none-t-cor" style="font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 150%;
letter-spacing: 0.1em;
color: #FFFFFF;"><?= Yii::t('app', 'main_text5') ?></p>
<?= Yii::t('app', 'main_text6') ?>
<style>
    @media(max-width: 991px){
        .t-cen-bag{
            text-align: center!important;
        }
    }
</style>
<div class="text-c1 dis-none-t t-cen-bag" style="width:100%;
    text-align: left;padding: 30px;"><a style="color: white;
    background: #6927ff;
    padding: 15px 30px;
    border-radius: 50px;" href="/solutions"><?= Yii::t('app', 'main_text7') ?></a></div>
        </div>
        <div class="col-12 col-lg-8" style="margin-top: 20px;">
        <div class="text-c1 disb-none-t" style="
    width:100%;
    padding: 10px;
    margin-bottom: 40px;
    "><a style="color: white;
    background: #6927ff;
    padding: 15px 30px;
    border-radius: 50px;" href="/solutions"><?= Yii::t('app', 'main_text7') ?></a></div>
    <?= Yii::t('app', 'video-trade1') ?>
        
        <script>
            if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            } else {
                document.getElementById('vid1').remove();
            }
        </script>
        <p class="disb-none-t dis-none-t-cor" style="font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 150%;
letter-spacing: 0.1em;
color: #FFFFFF;"><?= Yii::t('app', 'main_text5') ?></p>
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="first-screen" style="height: 120vh; z-index: 5">
    <div class="container">
        <div class="row">
            <div class="first-screen1">
                <div class="first-screen__fixed">
                    <div class="first-screen__content" style="padding-top: 15px;max-width: 1600px;">
                    <div class="row" style="padding: 0 15px;margin: 0;">
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
        <img style="margin-bottom: 20px;    max-width: 230px; width: 100%;" class="img-fluid dis-none-t" data-src="/images/bdex.png" alt="trade">
        <h2 style="color: #fff; font-size: 24px; color: #FFFFFF; line-height: 29px;" class="mb-4"><?= Yii::t('app', 'main_text4b') ?></h2>
        <p class="dis-none-t dis-none-t-cor" style="font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 150%;
letter-spacing: 0.1em;
color: #FFFFFF;"><?= Yii::t('app', 'main_text5b') ?></p>
<?= Yii::t('app', 'main_text6b') ?>
<div class="text-c1 dis-none-t t-cen-bag" style="width:100%;
    text-align: left;padding: 30px;"><a style="color: white;
    background: #6927ff;
    padding: 15px 30px;
    border-radius: 50px;" href="/solutions"><?= Yii::t('app', 'main_text7') ?></a></div>
        </div>
        <div class="col-12 col-lg-8" style="margin-top: 20px;">
        <div class="text-c1 disb-none-t" style="
    width:100%;
    padding: 10px;
    margin-bottom: 40px;
    "><a style="color: white;
    background: #6927ff;
    padding: 15px 30px;
    border-radius: 50px;" href="/solutions"><?= Yii::t('app', 'main_text7') ?></a></div>
    <?= Yii::t('app', 'video-biki1') ?>
        
        <script>
            if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            } else {
                document.getElementById('vid1').remove();
            }
        </script>
        
        <p class="disb-none-t dis-none-t-cor" style="font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 150%;
letter-spacing: 0.1em;
color: #FFFFFF;"><?= Yii::t('app', 'main_text5') ?></p>
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
    <section style="background: #151515; padding:150px 15px; z-index: 990;">
	<div>
	    <div class="container">
	        <div class="row" style="margin: 0;">
	        	<div>
                <div class="row" style="">
                <div class="col-12" style="text-align: center;">
                <h2 style="color: #fff!important;"><?= Yii::t('app', 'main_text8') ?></h2>
                <img data-src="/images/company/arrowgrey.png" alt="arrowgrey" class="arrowgrey">
                <p class="tagline"><?= Yii::t('app', 'main_text9') ?></p>
                </div>
                <?= Yii::t('app', 'main_text10') ?>
        
                <div class="col-12" style="display:none">
                    <h3 class="h3-style1">LATEST INSIGHTS</h3>
                </div>
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
<script src="/scripts/jquery-1.12.4.min.js"></script>
<script src="/scripts/app.js"></script>
