<?php
use yii\helpers\Url;
use common\models\Img;
use frontend\widgets\BlogLinkPager;
use yii\helpers\Html;
use yii\widgets\ActiveForm;



/*$this->registerJsFile('/scripts/jquery-1.12.4.min.js');
$this->registerJsFile('/scripts/slick.min.js');
$this->registerJsFile('/scripts/myslick.js');*/

/*$this->registerCssFile("/styles/bootstrap.min.css");*/
/*$this->registerCssFile("/styles/slick-theme.css");
$this->registerCssFile("/styles/slick.css");*/
/*$this->registerCssFile("/styles/blog.css");*/



$page = isset($_GET['page']) ? ' Page '.intval($_GET['page']) : '';
$default_title = 'News about apps world - Lab3M!'.$page;

$description = (isset($select_category) ? 'Category '.$select_category->name.'. ' : '').(!empty($page) ? $page.'. ': '').'Corporate blog dedicated to the hottest trends and news in IT, users guidelines, and stories about our team.';
$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);

$this->registerMetaTag([
    'property' => 'og:description',
    'content' => $description,
]);
$this->title = ucfirst(isset($select_category) ? 'Category '.$select_category->name.$page.'. News about apps world - Lab3M!' : $default_title );

$search_form = new \common\models\PostSearchForm();
?><?= $this->render('_styles'); ?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?>



<?
$data = ['categoryes'=>$categoryes, 'lang'=>$lang];

if(isset($select_category))
	$data['select_category'] = $select_category;
	
echo $this->render("_categories", $data);
?>
<style>
	.ajax-blog-loader{
        position: relative;
		width:100px;
		margin:0px auto 54px;
    }
    .ajax-blog-loader img{
        animation: rotate infinite 4s linear;
        
        width: 100px;
        height: 100px;
    }
</style>

<div class="blog">
    <h1>Blog</h1>
    <div class="container">
		 <?php if(isset($_GET['search'])){ ?> <h2 class="category">Searching: <?=$_GET['search'];?></h2> <?php } ?>
        <div class="row">
			<?=$this->render("_index", ['models'=>$models]);?>
        </div>
		<div class="ajax-blog-loader"><img src="/images/header/logo3.svg" alt="Lab3M logo"></div>
    </div>
</div>
 <!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
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

var searchphrase = "<?=$_GET['search']?>";
var blog_pages_count = <?=$pages->pageCount;?>;
</script>

