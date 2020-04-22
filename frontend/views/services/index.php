<?php
use yii\helpers\Url;

$this->title = ucfirst(Yii::t('app','meta_services_title'));
$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('app','meta_services_description')
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => 'https://demol3m.fun/images/l3m-t.png',
],'og_image');
/*$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services.css");*/
?>
<link rel="stylesheet" href="/styles/main-top.css">
<style>
    html{
        width: 100%!important;
        overflow-x: hidden!important;
    }
</style>
<style>
body{overflow-x: hidden}
 body .container{max-width: 990px;width: 100%;}
/*services*/
#services h1{
    font-size: 42px;
    color: #fff;
    margin: 162px 0 15px 0;
    font-weight: 500;
}
.text-center {
    text-align: center;
}
#services .title p{
    color: #bebcb4;
    font-size: 13px;
    text-transform: uppercase;
    font-weight: bolder;
    padding-top: 12px;
    letter-spacing: 1px;
    margin-bottom: 20px;
}
#services .developments > div{
    padding: 50px 10px;
    transition: all 0.3s;
}
#services .developments h2,
#services .feachers h2{
    font-size: 22px;
    color: #70665b;
    margin-top: 20px;
    margin-bottom: 12px;
}
#services .developments h2{
    margin-top: 50px;
}
#services .feachers h2{
    margin-top: 14px;
    margin-bottom: 17px;
}
#services .feachers p{
    font-size: 16px;
    color: #fff;
    line-height: 2;
}
#services .developments a.info,
#services .feachers a.info{
    font: 16px 'Work Sans', sans-serif;
    color: #fff;
    display: block;
    background-repeat: no-repeat;
    transition: color .3s ease-in-out;
}
#services .developments a.info .arrow-right,
#services .feachers a.info .arrow-right{
    background-image: url('/images/services/More_info_hover.svg');
    margin-left: 15px;
    height: 6px;
    width: 20px;
    display: inline-block;
    -moz-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    position: relative;
    top: -1px;
}
#services .feachers a.info{
    margin-top: 25px;
}
#services .developments a.name,
#services .feachers a.name{
    font: 22px 'Work Sans', sans-serif;
    color: #fff;
    transition: color .3s ease-in-out;
}
#services .feachers a.info{
    background-position: 35% center;
}
.outer-img{
    height: 130px;
}
#services .dotted > div{
    background-image: url('/images/services/dotted.png');
    background-repeat: no-repeat;
    height: 2px;
}
#services .feachers{
    margin-top: 100px;
}
#services .feachers > .item{
    padding-left: 0;
    margin-bottom: 86px;
    text-align: center;
}
#services .feachers div.img{
    height: 80px;
    line-height: 75px;
}
html{
    background: #151515;
}
body{
    color: #fff!important;
}
/*services*/
@media (max-width:991px){.main.wrapper3{overflow-x:hidden;}

@media (max-height:400px){.header__menu-link:first-child{margin-top:20px !important;}}
@media (max-height:400px) and (max-width:700px){.header_white .header__social-mobile-control_active{background:url(../images/social.svg) no-repeat 18px 50%, #fff !important;}
</style>
<link rel="stylesheet" href="/styles/services.css">

<?=$this->render("../blog/_styles");?>
<!-- Load CSS Compilled without JS -->
<noscript><link rel="stylesheet" href="/styles/home.css"></noscript>
<style>
.what_we_do img {
    margin-top: 10px;
}
@media screen and (max-width: 991px){
    .wwd-item img {
    margin: 36px auto 0;
    margin-top: 15px;
}
}
@media screen and (max-width: 767px){
   .wwd-item img {
    margin: 0 auto 40px;
    margin-top: 15px;
}
}
#company .wwd-item img {
    margin-top: 15px;
}
</style>
<link rel="stylesheet" href="/styles/company.css">
<div id="company">
    <div class="what_we_do" style="padding-bottom: 100px;background: #131313;">
        <div class="container">
            <div class="row info text-center">
                <?= Yii::t('app', 'services_block0') ?>
<?php foreach ($services as $service){ ?>
    <div class="row wwd-item">
        <a href="<?=Url::to(['blog/show-post','id'=>$service['url'],'language'=>Yii::$app->language])?>" class="info">
        <div class="col-name col-md-4 hidden-xs hidden-sm">
            <p class="name"><?=$service['title']?></p>
        </div>
        <div class="text-center col-sm-2">
            <img src="<?=$service['image']?>" alt="phone">
        </div>
        <div class="col-sm-10 col-md-6">
            <p class="sm-name name"><?=$service['title']?></p>
            <p class="description"><?=$service['description']?></p>
        </div>
        </a>
    </div>
<?php } ?>
        </div>
    </div>
</div>

<?= Yii::t('app', 'services_block') ?>

 <section id="services" style="background: #151515; display:none">
     <div class="container">
         <div class="row title">
            <h1 class="text-center"><?= Yii::t('app', 'Services_name') ?></h1>
            <div class="arrow text-center">
                <img src="/images/arrow/white.svg" class="text-center" alt="arrow-white">
            </div>
            <p class="text-center">
                We launch advanced commerce platforms
            </p>
         </div>
         <div class="row developments">
             <div class="col-md-4 col-sm-12 text-center item">
                <div class="outer-img">
                    <a href="/web-development">
                        <img src="/images/services/web.svg" alt="websites">
                    </a>
                </div>
                <h2><a href="/web-development" class="name">Web Development</a></h2>
             </div>
             <div class="col-md-4 col-sm-12 text-center item">
                <div class="outer-img">
                    <a href="/mobile-development">
                        <img src="/images/services/mobile.svg" alt="mobile">
                    </a>
                </div>
                <h2><a href="/mobile-development" class="name">Mobile Development</a></h2>
             </div>
             <div class="col-md-4 col-sm-12 text-center item">
                <div class="outer-img">
                    <a href="/outsourcing-service">
                        <img src="/images/services/outstaff.svg" alt="outstaff">
                    </a>
                </div>
                <h2><a href="/outsourcing-service" class="name">Outsourcing</a></h2>
             </div>
         </div>
         <div class="row dotted">
             <div class="col-lg-12"></div>
         </div>

         <div class="feachers clearfix">


                 <div class="col-lg-4 col-sm-6 item">
                     <div class="img">
                        <a href="/qa-testing">
                            <img src="/images/services/QA.svg" alt="QA">
                        </a>
                     </div>
                     <h2><a href="/qa-testing" class="name">QA, Testing</a></h2>
                     <p>When we deliver a product to you that means it has gone through point device testing. Our QA
                         engineers won't allow a single bug to stay.
                     </p>
                     <a href="/qa-testing" class="info">More info<i class="arrow-right"></i></a>
                 </div>
                 <div class="col-lg-4 col-sm-6 item">
                     <div class="img">
                        <a href="/ongoing-tech-support">
                            <img src="/images/services/Support.svg" alt="Support">
                        </a>
                     </div>
                     <h2><a href="/ongoing-tech-support" class="name">Ongoing Tech Support</a></h2>
                     <p>We never give up projects after release and you can count on further maintenance and updates if
                         you have some fresh ideas.
                     </p>
                     <a href="/ongoing-tech-support" class="info">More info<i class="arrow-right"></i></a>
                 </div>
                 <div class="col-lg-4 col-sm-6 item">
                     <div class="img">
                        <a href="/security-and-compliance">
                            <img src="/images/services/Security.svg" alt="Security">
                        </a>
                     </div>
                     <h2><a href="/security-and-compliance" class="name">Security and Compliance</a></h2>
                     <p>We safeguard your private information and guarantee confidentiality of your data with advanced
                         security algorithms.
                     </p>
                     <a href="/security-and-compliance" class="info">More info<i class="arrow-right"></i></a>
                 </div>
                 <div class="col-lg-4 col-sm-6 item">
                     <div class="img">
                        <a href="/cloud-computing">
                            <img src="/images/services/Cloud.svg" alt="Cloud">
                        </a>
                     </div>
                     <h2><a href="/cloud-computing" class="name">Cloud Computing</a></h2>
                     <p>If you develop your own cloud-based system then you, your employees and customers will have
                         remote access to important data.
                     </p>
                     <a href="/cloud-computing" class="info">More info<i class="arrow-right"></i></a>
                 </div>
                 <div class="col-lg-4 col-sm-6 item">
                     <div class="img">
                        <a href="/ecommerce-cms">
                            <img src="/images/services/Ecommerce.svg" alt="Ecommerce">
                        </a>
                     </div>
                     <h2><a href="/ecommerce-cms" class="name">Ecommerce & CMS</a></h2>
                     <p>Boost your sales with brand new and fully personalized eCommerce website. We will help you to achieve your business objectives.
                     </p>
                     <a href="/ecommerce-cms" class="info">More info<i class="arrow-right"></i></a>
                 </div>
                 <div class="col-lg-4 col-sm-6 item">
                     <div class="img">
                        <a href="/wearable-tech">
                            <img src="/images/services/Wearable_Tech.svg" alt="Wearable_Tech">
                        </a>
                     </div>
                     <h2><a href="/wearable-tech" class="name">Wearable Tech</a></h2>
                     <p>Expand your products to reach your users with the apps for Apple and Android Watches and Glasses
                         or any other wearable device.
                     </p>
                     <a href="/wearable-tech" class="info">More info<i class="arrow-right"></i></a>
                 </div>
                 <div class="col-lg-4 col-sm-6 item">
                     <div class="img">
                        <a href="/ibeacon-software">
                            <img src="/images/services/iBeacon.svg" alt="iBeacon">
                        </a>
                     </div>
                     <h2><a href="/ibeacon-software" class="name">iBeacon Software</a></h2>
                     <p>Let your customers know where your business is located by means of the contemporary iBeacons!
                         We will help you to keep up with times.
                     </p>
                     <a href="/ibeacon-software" class="info">More info<i class="arrow-right"></i></a>
                </div>
                <div class="col-lg-4 col-sm-6 item">
                    <div class="img">
                        <a href="/three-d-vr-expertise">
                            <img src="/images/services/3D_VR.svg" alt="3D_VR">
                        </a>
                    </div>
                    <h2><a href="/three-d-vr-expertise" class="name">3D, VR expertise</a></h2>
                    <p>Our team of 3D expert is ready to deliver astonishing solutions for VR, AR and 3D apps.
                        Create your own 3D universe with lab3m.
                    </p>
                    <a href="/three-d-vr-expertise" class="info">More info<i class="arrow-right"></i></a>
                </div>
        </div>
        <script>
        </script>
     </div>
     <?= $this->render('//layouts/_blog_random') ?>
 </section>
 <!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var scr = {"scripts":[
    {"src" : "../scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "../scripts/bootstrap.min.js", "async" : false},
    {"src" : "../scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
