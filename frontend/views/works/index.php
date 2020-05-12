<?php
$this->title = Yii::t('app','meta_works_title');
use yii\helpers\Url;
/*$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/works.css");*/

$this->registerMetaTag([
    'name' => 'description',
    'content' => Yii::t('app','meta_works_description')
    ]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => 'https://demol3m.fun/images/l3m-t.png',
],'og_image');
$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('app','text_header_solutions'),
    'url'=>\yii\helpers\Url::toRoute('/solutions')
);


?>


<link rel="stylesheet" href="/styles/works.css">
<div class="works" style="background: #151515">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1><?= Yii::t('app', 'main_text2') ?></h1>
                <div class="arrow"></div>
                <h2><?= Yii::t('app', 'main_text3') ?></h2>
                <div class="link">
                    <a href="/trade3m" class="item lafka">
                        <img class="l-logo" src="/images/works/lafka-logo.png" alt="lafka-logo">
                        <img class="l-text" src="/images/works/lafka-text.png" alt="lafka-text">
                    </a>
                    <a href="/exchangebiki" class="item lafka">
                        <img class="l-logo" src="/images/works/lafka-logo1.png" alt="lafka-logo">
                        <img class="l-text" src="/images/works/lafka-text1.png" alt="lafka-text">
                    </a>
                    <!-- <a href="/solutions/trade3m" class="item lafka">
                        <img class="l-logo" src="/images/works/lafka-logo.png" alt="lafka-logo">
                        <img class="l-text" src="/images/works/lafka-text.png" alt="lafka-text">
                    </a> -->
                    <!-- <a href="/works/melo" class="item melo">
                        <img src="/images/works/melo.png" alt="melo">
                        <div class="overlay">
                            <p class="title">Melo</p>
                        </div>
                    </a>
                    <a href="/works/lcoin" class="item peak">
                        <img src="/images/works/lcoin0.jpg" alt="lcoin">
                        <div class="overlay">
                            <p class="title">Lcoin</p>
                        </div>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->

<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
