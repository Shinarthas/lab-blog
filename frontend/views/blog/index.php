<?php
use yii\helpers\Url;
use common\models\Img;
use frontend\widgets\BlogLinkPager;
use yii\helpers\Html;



/*$this->registerJsFile('/scripts/jquery-1.12.4.min.js');
$this->registerJsFile('/scripts/slick.min.js');
$this->registerJsFile('/scripts/myslick.js');*/

/*$this->registerCssFile("/styles/bootstrap.min.css");*/
/*$this->registerCssFile("/styles/slick-theme.css");
$this->registerCssFile("/styles/slick.css");*/
$this->registerCssFile("/styles/blog-post.css");

$this->params['breadcrumbs'][] = array(
    'label'=> Yii::t('app','text_header_blog'),
    'url'=>Url::toRoute('/blog/')
);

$page = isset($_GET['page']) ? ' Page '.intval($_GET['page']) : '';
$default_title = Yii::t('app','meta_blog_title').$page;
$default_description=Yii::t('app','meta_blog_description');
$description = (isset($select_category) ? ''.$select_category->name.'. ' : '').(!empty($page) ? $page.'. ': '').$default_description;
$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $description,
]);
$this->title = ucfirst(isset($select_category) ? ''.$select_category->name.$page.'' : $default_title );

$search_form = new \common\models\PostSearchForm();
?>

<?
$data = ['categoryes'=>$categoryes, 'lang'=>$lang];

if(isset($select_category))
	$data['select_category'] = $select_category;
	
echo $this->render("_categories", $data);
?>


<style>
        label, a, button {
            user-select: none;
            outline: none !important;
        }
        a, a:hover, a:active, a:focus {
            text-decoration: none;
            transition: 150ms;
        }
        .title1{
        font-weight: 700;
        font-size: 38px;
        line-height: 55px;
        margin-bottom: 50px;
        color: #3E4555;
        text-align: center;
        }
        .one-article{
            margin-bottom: 40px;
            display: flex;
            align-items: center;
        }
        .one-article .left-part {
            min-width: 470px;
            width: 470px;
            margin-right: 50px;
        }
        .left-part img {
            border-radius: 25px;
            width: 100%;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }
        .articles .one-article .right-part {
            margin-right: 0px;
        }
        .right-part .info {
            font-weight: 500;
            font-size: 12px;
            line-height: 18px;
            color: #80899D;
            margin-bottom: 15px;
            height: 18px;
        }
        .info .date {
            float: left;
            margin-right: 10px;
        }
        .info .read {
            float: left;
            padding-left: 10px;
            position: relative;
        }
        .info .read:before {
            content: "";
            display: block;
            float: left;
            width: 4px;
            height: 4px;
            background: #8F97AB;
            border-radius: 2px;
            position: absolute;
            top: 7px;
            left: -1px;
        }
        .right-part .name {
            font-weight: 500;
            font-size: 24px;
            line-height: 34px;
            margin-bottom: 15px;
        }
        .right-part .name a {
            color: #3E4555;
            transition: 150ms;
        }
        .right-part .desc {
            font-size: 14px;
            line-height: 24px;
            color: #80899D;
            margin-bottom: 20px;
        }
        .right-part .go-to-article a {
            font-weight: 700;
            cursor: pointer;
            color: #6927ff;
            transition: 150ms;
            font-size: 14px;
        }
        .siteWrapper{
            background-color: white;
        }
        .head{
            background: #151515;
        }
        @media (min-width: 576px){
            .container {
                max-width: 540px!important;
            }
        }
        @media (min-width: 768px){
            .container {
                max-width: 720px!important;
            }
        }
        @media (min-width: 992px){
            .container {
                max-width: 960px!important;
            }
        }
        @media (min-width: 1200px){
            .container {
                max-width: 1140px!important;
            }
        }

        @media (max-width: 991.98px) and (min-width: 768px){
            .one-article .left-part {
            min-width: 320px;
            width: 320px;
            margin-right: 30px;
            }
            .right-part .name {
                font-size: 18px;
                line-height: 28px;
                margin-bottom: 10px;
            }
            .right-part .desc {
                font-size: 12px;
                line-height: 20px;
                margin-bottom: 15px;
            }
        }
        @media (max-width: 767.98px){
            .title1 {
                font-size: 28px;
                line-height: 40px;
            }
            .one-article {
                display: block;
                width: 290px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 50px;
            }
            .one-article .left-part {
            min-width: 100%;
            width: 100%;
            margin-right: 0px;
            margin-bottom: 30px;
            }
            .right-part .name {
                font-size: 20px;
                line-height: 28px;
            }
        }
      </style>
<div class="container" style="padding: 70px 0;">
        <div class="row" style="margin: 0;">
            <div class="col-xl-1"></div>
            <div class="col-xl-10 col-lg-12">
                <h1 style="display: block;"><div class="title1"><?= Yii::t('app', 'blog_name') ?></div></h1>
                <?=$this->render("_index", ['models'=>$models]);?>
                
            </div>
        </div>
    </div>

    <section style="background-color: white; height: 150px">
    </section>
    <?= Yii::t('app', 'main_text11') ?>
    <section style="background-color: white; height: 150px">
    </section>
<script>
<script>var ms=document.createElement("link");ms.rel="stylesheet";
    ms.href="/styles/blog.css?v=1.1";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>var scr = {"scripts":[
        {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
        {"src" : "/scripts/slick.min.js", "async" : false},
        {"src" : "/scripts/myslick.js", "async" : false},
        {"src" : "/scripts/app.js", "async" : false},
		{"src" : "/scripts/blog.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);

var searchphrase = "";
var blog_pages_count = <?=$pages->pageCount;?>;
</script>





