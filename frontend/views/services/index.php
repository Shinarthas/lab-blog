<?php
use yii\helpers\Url;

$this->title = ucfirst(Yii::t('app','meta_services_title'));
$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('app','meta_services_description')
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => 'https://lab3m.com/images/l3m-t.png',
],'og_image');
/*$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services.css");*/

$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('app','text_header_services'),
    'url'=>\yii\helpers\Url::toRoute('/services')
);


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
    <h1 class="text-center" style="display:none;"><?= Yii::t('app', 'Services_name') ?></h1>
    <div class="what_we_do" style="padding-bottom: 100px;background: #131313;">
        <div class="container">
            <div class="row info text-center">
                <?= Yii::t('app', 'services_block0') ?>
<?php foreach ($services as $service){ ?>
    <div class="row wwd-item">
        <a href="<?=Url::to(['blog/show-post','id'=>$service['url'],'language'=>Yii::$app->language])?>" class="info">
        <div class="text-center col-12 col-md-12 col-lg-4">
            <img class="img-fluid" data-src="<?=$service['image']?>" alt="phone">
        </div>
        <div class="col-12 col-md-12 col-lg-8">
            <p class="name text-center" style="width: 100%; margin: 0; padding: 8px;"><?=$service['title']?></p>
            <p class="description" style="width: 100%; margin: 0; padding: 8px;"><?=$service['description']?></p>
        </div>
        </a>
    </div>
<?php } ?>
        </div>
    </div>
</div>

<?= Yii::t('app', 'services_block') ?>


 <!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var scr = {"scripts":[
    {"src" : "../scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "../scripts/bootstrap.min.js", "async" : false},
    {"src" : "../scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
