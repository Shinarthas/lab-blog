<?php
$description = Yii::t('app','meta_company_description');
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
    'content' => 'https://demol3m.fun/images/l3m-t.png',
],'og_image');
$this->title = ucfirst( Yii::t('app','meta_company_title'));

/*$this->registerCssFile("/styles/bootstrap.min.css");*/
/*$this->registerCssFile("/styles/company.css");*/
?>

<link rel="stylesheet" href="/styles/company.css">
<style>
body .container{max-width: 990px;width: 100%; font-family: "Work Sans", sans-serif;}
.text-center {text-align: center;}
/*company*/
#company .about_us{
    background-color: #151515;
    padding-bottom: 170px;
    padding-top: 194px;
}
#company .about_us img,
#company .what_we_do img{
    margin-top: 10px;
}
#company .about_us h1,
#company .what_we_do h2{
    color: #fff;
    font-size: 40px;
    letter-spacing: 1px;
}
#company .about_us p{
    font-size: 18px;
    color: #fff;
    margin-top: 36px;
    line-height: 2;
}

/*company*/
</style>
<?=$this->render("../blog/_styles");?>
<!-- Load CSS Compilled without JS -->
<noscript><link rel="stylesheet" href="/styles/home.css"></noscript>

<div class="company">
<section id="company">
    <div class="about_us" style="padding-top: 100px;">
        <div class="container">
        <?= Yii::t('app', 'company_block') ?>
        </div>
    </div>
    <!-- <?= Yii::t('app', 'downloader_block') ?> -->
    
    <section style="background: #151515; padding:150px 15px">
	<div>
	    <div class="container">
	        <div class="row">
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
</section>
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>

