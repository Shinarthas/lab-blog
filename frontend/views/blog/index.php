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
<style>
.header
{
	z-index:1000!important;
}
.header__menu {
    padding-top: 20px;
    text-align: right;
}
.header__menu-link
{
	cursor:pointer;
	position:relative;
	z-index:10;
}
.header__menu-link .dropdown-menu
{
	display:none;
}
.header__menu-link:hover span
{
	color:#fff;
}

.header__menu-link:hover .dropdown-menu
{
	position:absolute;
	background:white;
	z-index:100;
	display:block;
	min-width:150px;
	text-align:center;
	margin-left: -13px;
	border-bottom:1px solid #fff;
	padding-top: 22px;
    padding-bottom: 3px;
	margin-top:-6px;
}
.header__menu-link.industries .dropdown-menu a
{
	width:350px;
	height:38px;
	overflow:hidden;
}
.header__menu-link img
{
	transition-duration:0.4s;
}
.header__menu-link:hover img
{
    transform: rotate(180deg);
}
.header__menu-link:hover .dropdown-menu a
{
	display:block;
	line-height: 38px;
	font-size:16px;
	text-align: left;
    padding: 0 11px;
	color:#fff;
}
.header__menu-link.mobile
{
	display:none;
}

@media (max-width: 991px)
{
	.header__menu-link.request-link:not(.mobile)
	{
		opacity:0!important;
		height:0;
	}
	.header__menu-link.mobile
	{
		display:block;
	}
}

@media (max-width: 450px){
	.new-year-tree{
		display: none;
	}
	.new-year-cap img{
		left: -23px !important;
		top: -5px !important;
	}
}
</style>
<style>
    body .container{max-width: 990px;width: 100%;}
    .header{position:absolute;z-index:102;top:0;left:0;right:0;}
    .header_white .header__content{margin:0 auto;width:100%;padding:0 24px;}
	.header_white .header__content:after{position:absolute;content:'';bottom:-1px;left:30px;right:30px;height:1px;background-color:rgba(203, 80, 17, 0.5);}
	.headerWhite  .header__content{margin:0 auto;width:100%;padding:0 24px; box-sizing: border-box;}
	.headerWhite  .header__content:after{position:absolute;content:'';bottom:-1px;left:30px;right:30px;height:1px;background-color:rgba(203, 80, 17, 0.5);}
    .header__logo{position:relative;float:left;height:70px;line-height:70px;}
    .header__logo .tt1{display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;}
    .header__logo .tt2{position:absolute;left:0px;transform:translateX(0%);display:inline-block;opacity:0;visibility:hidden;transition-duration:300ms;}
    .header__logo .tt3{position:absolute;left:24px;transform:translateX(-50%);display:inline-block;opacity:0;visibility:hidden;transition-duration:300ms;}
    .header__logo img{vertical-align:middle;}
    .header__logo:active{top:1px;}
    .header__menu-link{position:relative;display:inline-block;margin:0 10px;line-height:30px;font-size:18px;font-weight:500;color:#ffffff !important;text-decoration:none;}
    .header__menu-link:active{top:1px;}
    .header__menu-link:first-child{margin-left:0;}
    .header__menu-link:last-child{margin-right:0;}
    .header__social-mobile-control{display:none;}
    .header__social{display:none;}
    .headerWhite.header{background:#fff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);}.headerWhite .header__content:after{display:none;}
    .headerWhite.header .header__menu .header__menu-link{color:#fff !important;}
    .headerWhite.header .header__menu.header__menu_visible .header__menu-link,
    .headerWhite.header .header__menu.header__menu_visible .header__menu-link:hover{color:#fff !important;}
    .headerWhite.header .header__menu .header__menu-link:hover{color:#fff !important;}
    .headerWhite.header .header__menu-link:nth-last-child(2){margin-left:10px;}
    .headerWhite.header .header__logo .tt2{position:static;display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;transform:none;}
    .blog
    {
	    margin-top:20px;
    }
    .blog h1{
        display: none;
    }
    .head-blog{
        height: 545px;
        overflow: hidden;
        margin-top: 70px;
        position: relative;
        /* background-color: #7a7683; */
        transition: all 1s;
        display:none;
    }
    .head-blog .loader-blog{
        position: absolute;
        top: 50%;
        left:50%;
        transform: translate(-50%,-50%);
    }
    .head-blog .loader-blog img{
        animation: rotate infinite 4s linear;
        width: 100px;
        height: 100px;
    }
    @keyframes rotate{100%{transform:rotate(360deg);}
    }
    .marker{
        min-height:125px;
    }
    .head-blog .sliding-blog{
        display: none;
        height: 545px;
    }
    .head-blog .slick-slide{
        position: relative;
        height: 545px;
        overflow: hidden;
    }
    .head-blog .slick-slide img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 100%;
        opacity: .4;
        transition: all .4s;
    }
    /* .head-blog.ready{
        background-color: #7a7683;
    } */
    /* .head-blog.ready .slick-slide img{
        opacity:.4;
    } */
    .head-blog .head-cont{
        position: absolute;
        max-width: 720px;
        width: 100%;
        top:50%;
        left:50%;
        transform: translate(-50%, -58%);
        text-align: center;
        /* opacity: 0; */
        transition: all .4s;
    }
    .head-blog .head-cont h2{
        color:#fff;
        font-size:70px;
        margin:0;
        line-height: 84px;
        margin-bottom: 25px;
        letter-spacing: .5px;
        height: 255px;
    }
    .head-blog .head-cont a{
        line-height: 50px;
        border:1px solid #fff;
        border-radius: 25px;
        padding: 0 43px;
        color: #fff;
        display: inline-block;
        font-size: 18px;
        transition: all .4s;
    }
    .head-blog .head-cont a:hover{
        background-color: rgba(255, 255, 255, .2);
    }
    .drop-category{
        width: 100%;
        margin: 0 auto;
        line-height: 50px;
        padding: 0 20px;
        background-color: transparent;
        border:medium none;
        border-radius: 25px;
        outline:none;
        text-align: left;
        position: relative;
        transition: all .4s;
    }
    .drop-category .arrow{
        position: absolute;
        top: 50%;
        right: 20px;
        display: block;
        margin-top: -5px;
        height: 10px;
        width: 16px;
        background-image: url(/images/blog/arrow-down.png);
    }
    .my-slider *{
        outline: none;
    }
    .slick-dots{
        bottom:50px;
    }
    .slick-dots li{
        width: auto;
        height:auto;
    }
    .slick-dots li button{
        background-color: rgba(255, 255, 255, 0.502);
        height: 16px;
        width: 16px;
        border-radius: 50%;
        transition: all .4s;
        padding: 0;
    }
    .slick-dots li.slick-active button{
        background-color: #fff !important;
    }
    .slick-dots li button:hover{
        background-color: rgba(255, 255, 255, .7);
    }
    .slick-dots li button:before{
        color:transparent !important;
    }

    .markers{
        padding: 60px 0;
    }
    .marker-list{
        text-align: center;
    }
    @media (min-width: 768px){
        .marker-list{
            display: inline-block !important;
        }
    }
    .marker-list .mlist{
        list-style: none;
        display: inline-block;
        margin: 0 4px;
    }
    .marker-list .mlist .link{
        display: block;
        padding: 0 15px;
        color: #fff;
        line-height: 40px;
        transition: color .4s;
    }
    .marker-list .mlist .link:hover{
        color: #9b9b9b;
    }
    .category{
        text-align: left;
        font:30px 'Raleway Bold', sans-serif;
        color: #fff;
        margin:16px 0 ;
    }
    .blog .post{
        float:none !important;
        display: inline-block;
        margin:0 -2px;
        vertical-align: top;
        text-align: center;
        padding: 15px 0;
        min-height:660px;
    }
    .post-img{
        text-align: center;
        display: block;
        position: relative;
        width: 300px;
        height: 150px;
        margin: 0 auto;
        overflow: hidden;
    }
    .post-img img{
	    /* position: absolute; */
	    width: 100%;
	    /* top: -20%; */
	    /* transform: translate(-50%, -50%); */
	    /* margin-left: -10%; */
    }
    .blog .title{
        font:12px 'Work Sans', sans-serif;
        color:#fff;
        text-align: center;
        text-transform: uppercase;
        margin-top: 40px;
    }
    .blog h2:not(.category){
        margin: 25px 0;
        padding: 0 10px;
        min-height: 150px; 
        
    }
    .blog .bot-link{
        font:26px/36px 'Raleway Bold', sans-serif;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        transition: all .4s;

    }
    .blog h2:hover .bot-link{
        color: #fff;
    }
    .blog .small-content{
        font:16px/30px 'Work Sans', sans-serif;
        color: #fff;
        max-height: 300px;
        overflow: hidden;
        margin: 0 auto 50px;
        width: 300px;
    }
    .foot-form{
        background-color: #fff5de;
        border-bottom: 1px solid #151515;
        padding:100px 0;
    }
    .foot-form{
        text-align: center;
    }
    .foot-form h2{
        font-size:42px;
        color: #fff;
    }
    .foot-form .callback{
        margin-top: 25px;
    }
    .callback .mail,
    .callback .subscribe{
        outline: none;
        width: 100%;
        border-radius: 30px;
    }
    .callback .mail{
        max-width: 408px;
        display: inline-block;
        height: 60px;
        margin-right: 20px;
        border:1px solid #ffba00;
        padding: 0 25px;
        font-size:18px;
        color: #a99689;
    }
    .sub-menu
    {
	    padding:5px 24px 0;
	    width: 100%;
        font-size: 14px;
    }
    .marker-list.categories
    {
	    margin: 0;
	    padding: 0;
    }

		 .marker-list form.mlist{
			padding: 0;
			margin: 0;
		}
        form.mlist .searchfield {
            width: 80px;
            margin: auto;
            color: #fff !important;
            border:0;
            background: #151515;
            border-bottom: 1px solid #fff;
            padding-left: 5px;
        }

        .marker-list form.mlist .search-submit {
            position: absolute;
            top: 0;
            right:0;
            background: #ffba00;
            color: #fff;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            display:none;
        }

        
    @media (max-width:991px){
		.header__logo .tt1{
			margin-left:25px;
		}
        .top-header{position:fixed;top:0;left:0;right:0;width:100%;}
        .header{position:fixed;z-index:1000;}
        .sub-menu
        {
	        position:relative;
	        z-index: 5;
	        background: #151515;        }
        .header_white{background:#ffffff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
        .header__content{width:100%;text-align:center;}
        .header_white .header__content:after{background:transparent;}
        .header__logo{visibility:hidden;float:none;}
        .header_white .tt1{opacity:0;visibility:hidden;}
        .header_white .tt2{opacity:1;visibility:visible;}
        .header{position:fixed;z-index:1000;}
        .header_white{background:#ffffff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
        .header__content{width:100%;text-align:left;}
        .header_white .header__content:after{background:transparent;}
        .header__logo{visibility:hidden;float:none;}
        .header_white .tt1{opacity:0;visibility:hidden;}
        .header_white .tt2{opacity:1;visibility:visible;}
        .header__menu-mobile-control{display:block;position:absolute;z-index:102;top:0;right:0;width:90px;height:70px;background: url('/images/menu.svg') no-repeat 30px 50%;cursor:pointer;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header_white .header__menu-mobile-control{background-image:url('/images/menu2.svg');}
        .headerWhite .header__menu-mobile-control{background-image:url('/images/menu2.svg');}
        .header__menu-mobile-control_close{background-image:url('/images/close.svg') !important;}
        .header__menu{position:fixed;z-index:101;top:0;left:0;right:0;height:0;padding-top:0;background:#fff;overflow:hidden;visibility:hidden;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header__menu_visible{height:100%;visibility:visible;}
        .header__menu-link{display:block;margin:0;line-height:60px;font-size:24px;font-weight:400;text-align:right; padding-right: 29px;}
        .headerWhite.header .header__menu .header__menu-link:hover span{color:#fff !important;}
        .header__menu-link:first-child{margin-top:70px;}
        .header__menu-link:last-child{margin-bottom:0px;}
        .header__menu-link:active{top:0;}
        .header__menu_visible .header__menu-link{opacity:1;}
        .header__menu-link:nth-last-child(2){margin-left:auto;}
        .headerWhite.header .header__menu .header__menu-link{color:#fff !important;}
      /*  .header__menu-link:after{position:absolute;bottom:0;right:0;width:100%;background:rgba(255, 255, 255, 0.34);}*/
        .header__menu-link:last-child:after{background:transparent;}
        /**/.header__social-mobile-control{display:block;position:absolute;z-index:100;top:0;right:0;width:90px;height:70px;background:url('/images/social.svg') no-repeat 28px 50%;cursor:pointer;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header_white .header__social-mobile-control,
        .headerWhite .header__social-mobile-control{background:url('/images/social2.svg') no-repeat 36px 50%;}
        .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #fff !important;}
        .header__social{display:block;position:absolute;z-index:100;top:70px;right:0;overflow:hidden;visibility:hidden;}
        .header__social_visible{display:block;visibility:visible;}
        .header__social-link{position:relative;display:block;padding:0 80px 0 30px;line-height:60px;font-size:20px;font-weight:600;color:#fff !important;background:#fff;text-align:right;text-decoration:none;transform:translateX(100%);transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header__social-link:after{position:absolute;content:'';bottom:0;left:30px;right:30px;height:1px;background:rgba(255, 255, 255, 0.3);}
        .header__social-link:last-child:after{width:0;}
        .header__social_visible .header__social-link{transform:translateX(0);}
        .header__social-link:nth-child(1){transition-delay:40ms;}
        .header__social-link:nth-child(2){transition-delay:80ms;}
        .header__social-link:nth-child(3){transition-delay:120ms;}
        .header__social-link:nth-child(4){transition-delay:160ms;}
        .header__social-link:nth-child(5){transition-delay:200ms;}
        .header__social-link:nth-child(6){transition-delay:240ms;}
        .header__social-link img{position:absolute;right:30px;top:50%;transform:translateY(-50%);}
        .head-blog .head-cont h2{
            font-size:60px;
            line-height: normal;
        }
        .blog{
            max-width: 634px;
            margin: 0 auto;
            padding-top:40px;
            
        }
        .marker-form label{
            margin: 20px 10px;
        }
        /* .head-blog img{
            height: 100%;
        } */
        .blog h2:not(.category){
            margin: 30px auto;
        }
        .blog .small-content{
            margin: 0 auto 80px;
        }
        .head-blog .slick-slide img{
            width: auto;
            height:100%;
        }
    }
    @media (max-width: 767px){
        .head-blog .head-cont h2{
            font-size: 34px;
            padding: 0 40px;
        }
        .blog .post{
        	margin:0 auto;
        	width:100%;
        	min-height: 0;
        }
        .post-img{
            width: auto;
            margin:0 15px;
            height:180px;
        }
        .blog h2:not(.category){
            min-height:auto;
            margin-bottom: 25px;
            max-width: none;
        }
        .blog .small-content{
            max-width: none;
            margin-bottom: 65px;
            height:auto;
            width:auto;
            padding: 0 15px;
             font:16px/28px 'Work Sans', sans-serif;
        }
        .callback .mail{
            display: block;
            margin:0 auto 20px;
            text-align: center;
        }
        .foot-form{
            padding: 100px 30px;
        }
		.drop-category{display:none;}


        .drop-category.open .arrow{
            transform: rotate(180deg);
        }


    }

    @media (max-width: 600px){
                
		 .category{
			text-align: left;
			font:30px 'Raleway Bold', sans-serif;
			color: #fff;
			margin:12px 0 12px;
		}
        .link.search-button
        {
	        display: none!important;
        }
        .marker-list .mlist .link
        {
             padding: 0 10px;
        }
    }
    @media (max-width: 449px){
        .header__content:after{left:20px;right:20px;}
        .header__logo{height:60px;line-height:60px;}
        .header_white .tt2,
        .headerWhite.header .header__logo .tt2{opacity:0;visibility:hidden;}
        .header_white .tt3,
        .headerWhite .header__logo .tt3{opacity:1;visibility:visible;}
        .header__menu-mobile-control{width:70px;height:60px;background-position-x:21px;}
        .header__menu_visible{padding-top:0px;}
        .header__social-mobile-control{width:70px;height:60px;background-position-x:18px;}
        .header__social{top:60px;}
        .header__social-link{padding:0 70px 0 20px;}
        .header_white .header__social-mobile-control{background-position-x:18px;}
        .headerWhite .header__social-mobile-control{background-position-x:16px;}
        .header_white .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #fff;}
        .head-blog .head-cont h2{
            /* padding: 0 20px; */
        }
        .sub-menu
        {
	        padding: 60px 24px 0;
        }
        .marker-list .mlist .link
        {
	        line-height: 30px;
        }
        .blog .post{
            /* padding: 0 20px; */
        }
        .post-img{
            margin: 0 -20px;
        }
        .blog .small-content
        {
	        padding: 0;
        }
        .foot-form{
            padding: 100px 20px;
        }
        .blog .bot-link{
            font-size: 22px;
        }
        
        .pagination li a, .pagination li span{
            width: 30px;
            line-height: 30px;
        }
		.bar
		{
			top:60px!important;
		}
    }
</style>
<style>
    #yii-debug-toolbar-logo {
    position: fixed;
    right: 31px;
    bottom: 4px;
}

.yii-debug-toolbar {
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    width: 96px;
    transition: width .3s ease;
    z-index: 1000000;
}

.yii-debug-toolbar_active {
    width: 100%;
}


.yii-debug-toolbar_position_top {
    margin: 0 0 20px 0;
    width: 100%;
}

.yii-debug-toolbar_position_bottom {
    position: fixed;
    right: 0;
    bottom: 0;
    margin: 0;
}

.yii-debug-toolbar__bar {
    position: relative;
    padding: 0;
    font: 11px Verdana, Arial, sans-serif;
    text-align: left;
    overflow: hidden;
    box-sizing: content-box;

    background: rgb(255, 255, 255);
    background: -moz-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgb(247, 247, 247) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f7f7f7', GradientType=0); /* IE6-9 */

    border: 1px solid rgba(0, 0, 0, 0.11);

    /* ensure debug toolbar text is displayed ltr even on rtl pages */
    direction: ltr;
}

.yii-debug-toolbar.yii-debug-toolbar_active:not(.yii-debug-toolbar_animating) .yii-debug-toolbar__bar {
    overflow: visible;
}
.yii-debug-toolbar:not(.yii-debug-toolbar_active) .yii-debug-toolbar__bar {
    height:40px;
}

.yii-debug-toolbar__bar:after {
    content: '';
    display: table;
    clear: both;
}

.yii-debug-toolbar__view {
    height: 0;
    overflow: hidden;
    background: white;
}

.yii-debug-toolbar__view iframe {
    margin: 0;
    padding: 0;
    padding-top: 10px;
    height: 100%;
    width: 100%;
    border: 0;
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__view {
    height: 100%;
}

.yii-debug-toolbar_iframe_animating .yii-debug-toolbar__view {
    transition: height .3s ease;
}

.yii-debug-toolbar__block {
    float: left;
    margin: 0;
    border-right: 1px solid rgba(0, 0, 0, 0.11);
    padding: 4px 8px;
    line-height: 32px;
    white-space: nowrap;
}

.yii-debug-toolbar__block_active,
.yii-debug-toolbar__ajax:hover {
    background: rgb(247, 247, 247); /* Old browsers */
    background: -moz-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0); /* IE6-9 */
}

.yii-debug-toolbar__block a {
    display: inline-block;
    text-decoration: none;
    color: black;
}

.yii-debug-toolbar__block img {
    vertical-align: middle;
}

.yii-debug-toolbar__label {
    display: inline-block;
    padding: 2px 4px;
    font-size: 12px;
    font-weight: normal;
    line-height: 14px;
    white-space: nowrap;
    vertical-align: baseline;
    color: #ffffff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #999999;
    -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
            border-radius: 3px;
}

.yii-debug-toolbar__label:empty {
    display: none;
}

a.yii-debug-toolbar__label:hover,
a.yii-debug-toolbar__label:focus {
    color: #ffffff;
    text-decoration: none;
    cursor: pointer;
}

.yii-debug-toolbar__label_important,
.yii-debug-toolbar__label_error {
    background-color: #b94a48;
}

.yii-debug-toolbar__label_important[href] {
    background-color: #953b39;
}

.yii-debug-toolbar__label_warning,
.yii-debug-toolbar__badge_warning {
    background-color: #f89406;
}

.yii-debug-toolbar__label_warning[href] {
    background-color: #c67605;
}

.yii-debug-toolbar__label_success {
    background-color: #468847;
}

.yii-debug-toolbar__label_success[href] {
    background-color: #356635;
}

.yii-debug-toolbar__label_info {
    background-color: #3a87ad;
}

.yii-debug-toolbar__label_info[href] {
    background-color: #2d6987;
}

.yii-debug-toolbar__label_inverse,
.yii-debug-toolbar__badge_inverse {
    background-color: #333333;
}

.yii-debug-toolbar__label_inverse[href],
.yii-debug-toolbar__badge_inverse[href] {
    background-color: #1a1a1a;
}

.yii-debug-toolbar__title {
    background: rgb(247, 247, 247); /* Old browsers */
    background: -moz-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, rgb(247, 247, 247) 0%, rgb(224, 224, 224) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f7f7f7', endColorstr='#e0e0e0', GradientType=0); /* IE6-9 */
}

.yii-debug-toolbar__block_last{ /* creates space for .yii-debug-toolbar__toggle, .yii-debug-toolbar__external */
    width: 80px;
    height: 40px;
    float: left;
}

.yii-debug-toolbar__toggle,
.yii-debug-toolbar__external {
    cursor: pointer;
    position: absolute;

    width: 30px;
    height: 30px;
    font-size: 25px;
    font-weight: 100;
    line-height: 28px;
    color: #ffffff;
    text-align: center;

    opacity: 0.5;
    filter: alpha(opacity=50);

    transition: opacity .3s ease;
}

.yii-debug-toolbar__toggle:hover,
.yii-debug-toolbar__toggle:focus,
.yii-debug-toolbar__external:hover,
.yii-debug-toolbar__external:focus {
    color: #ffffff;
    text-decoration: none;
    opacity: 0.9;
    filter: alpha(opacity=90);
}

.yii-debug-toolbar__toggle-icon,
.yii-debug-toolbar__external-icon {
    display: inline-block;

    background-position: 50% 50%;
    background-repeat: no-repeat;
}

.yii-debug-toolbar__toggle {
    right: 10px;
    bottom: 4px;
}

.yii-debug-toolbar__toggle-icon {
    padding: 7px 0;
    width: 10px;
    height: 16px;
    background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMTUuNTYzIDQwLjgzNmEuOTk3Ljk5NyAwIDAgMCAxLjQxNCAwbDE1LTE1YTEgMSAwIDAgMCAwLTEuNDE0bC0xNS0xNWExIDEgMCAwIDAtMS40MTQgMS40MTRMMjkuODU2IDI1LjEzIDE1LjU2MyAzOS40MmExIDEgMCAwIDAgMCAxLjQxNHoiLz48L3N2Zz4=');
    transition: -webkit-transform .3s ease-out;
    transition: transform .3s ease-out;
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}

.yii-debug-toolbar_active .yii-debug-toolbar__toggle-icon {
    -webkit-transform: rotate(0);
    transform: rotate(0);
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__toggle-icon {
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
}

.yii-debug-toolbar__external {
    display: none;
    right: 50px;
    bottom: 4px;
}

.yii-debug-toolbar_iframe_active .yii-debug-toolbar__external {
    display: block;
}

.yii-debug-toolbar__external-icon {
    padding: 8px 0;
    width: 14px;
    height: 14px;
    background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDUwIDUwIj48cGF0aCBmaWxsPSIjNDQ0IiBkPSJNMzkuNjQyIDkuNzIyYTEuMDEgMS4wMSAwIDAgMC0uMzgyLS4wNzdIMjguMTAzYTEgMSAwIDAgMCAwIDJoOC43NDNMMjEuNyAyNi43OWExIDEgMCAwIDAgMS40MTQgMS40MTVMMzguMjYgMTMuMDZ2OC43NDNhMSAxIDAgMCAwIDIgMFYxMC42NDZhMS4wMDUgMS4wMDUgMCAwIDAtLjYxOC0uOTI0eiIvPjxwYXRoIGQ9Ik0zOS4yNiAyNy45ODVhMSAxIDAgMCAwLTEgMXYxMC42NmgtMjh2LTI4aDEwLjY4M2ExIDEgMCAwIDAgMC0ySDkuMjZhMSAxIDAgMCAwLTEgMXYzMGExIDEgMCAwIDAgMSAxaDMwYTEgMSAwIDAgMCAxLTF2LTExLjY2YTEgMSAwIDAgMC0xLTF6Ii8+PC9zdmc+');
}

.yii-debug-toolbar__ajax {
    position: relative;
}

.yii-debug-toolbar__ajax:hover .yii-debug-toolbar__ajax_info,
.yii-debug-toolbar__ajax:focus .yii-debug-toolbar__ajax_info {
    visibility: visible;
}
.yii-debug-toolbar__ajax_info {
    visibility: hidden;
    transition: visibility .2s linear;
    background-color: white;
    box-shadow: inset 0 -10px 10px -10px #e1e1e1;
    position: absolute;
    bottom: 40px;
    left: -1px;
    padding: 10px;
    max-width: 480px;
    max-height: 480px;
    word-wrap: break-word;
    overflow: hidden;
    overflow-y: auto;
    box-sizing: border-box;
    border: 1px solid rgba(0, 0, 0, 0.11);
    z-index: 1000001;
}
.yii-debug-toolbar__ajax a {
    color: #337ab7;
}
.yii-debug-toolbar__ajax table {
    width: 100%;
    table-layout: auto;
    border-spacing: 0;
    border-collapse: collapse;
}
.yii-debug-toolbar__ajax table td {
    padding: 4px;
    font-size: 12px;
    line-height: normal;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
.yii-debug-toolbar__ajax table th {
    padding: 4px;
    font-size: 11px;
    line-height: normal;
    vertical-align: bottom;
    border-bottom: 2px solid #ddd;
}
.yii-debug-toolbar__ajax_request_status {
    color: white;
    padding: 2px 5px;
}
.yii-debug-toolbar__ajax_request_url {
    max-width: 170px;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>


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

    <h1>Blog - Lab3M</h1>
    <div class="container">
		<?php if(isset($select_category)){ ?> <h2 class="category">Category: <?=$select_category->name?></h2> <?php } ?>
        <div class="row">
           <?=$this->render("_index", ['models'=>$models]);?>
        </div>

    </div>
    <section style="background-color: #151515; height: 150px">
    </section>
    <?= Yii::t('app', 'main_text11') ?>
    <section style="background-color: #151515; height: 150px">
    </section>
</div>
<script>
    <script>(function () {
    'use strict';

    var findToolbar = function () {
            return document.querySelector('#yii-debug-toolbar');
        },
        ajax = function (url, settings) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            settings = settings || {};
            xhr.open(settings.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.setRequestHeader('Accept', 'text/html');
            xhr.onreadystatechange = function (state) {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200 && settings.success) {
                        settings.success(xhr);
                    } else if (xhr.status != 200 && settings.error) {
                        settings.error(xhr);
                    }
                }
            };
            xhr.send(settings.data || '');
        },
        url,
        div,
        toolbarEl = findToolbar(),
        toolbarAnimatingClass = 'yii-debug-toolbar_animating',
        barSelector = '.yii-debug-toolbar__bar',
        viewSelector = '.yii-debug-toolbar__view',
        blockSelector = '.yii-debug-toolbar__block',
        toggleSelector = '.yii-debug-toolbar__toggle',
        externalSelector = '.yii-debug-toolbar__external',

        CACHE_KEY = 'yii-debug-toolbar',
        ACTIVE_STATE = 'active',

        animationTime = 300,

        activeClass = 'yii-debug-toolbar_active',
        iframeActiveClass = 'yii-debug-toolbar_iframe_active',
        iframeAnimatingClass = 'yii-debug-toolbar_iframe_animating',
        titleClass = 'yii-debug-toolbar__title',
        blockClass = 'yii-debug-toolbar__block',
        blockActiveClass = 'yii-debug-toolbar__block_active',
        requestStack = [];

    if (toolbarEl) {
        url = toolbarEl.getAttribute('data-url');

        ajax(url, {
            success: function (xhr) {
                div = document.createElement('div');
                div.innerHTML = xhr.responseText;

                toolbarEl.parentNode && toolbarEl.parentNode.replaceChild(div, toolbarEl);

                showToolbar(findToolbar());
            },
            error: function (xhr) {
                toolbarEl.innerHTML = xhr.responseText;
            }
        });
    }

    function showToolbar(toolbarEl) {
        var barEl = toolbarEl.querySelector(barSelector),
            viewEl = toolbarEl.querySelector(viewSelector),
            toggleEl = toolbarEl.querySelector(toggleSelector),
            externalEl = toolbarEl.querySelector(externalSelector),
            blockEls = barEl.querySelectorAll(blockSelector),
            iframeEl = viewEl.querySelector('iframe'),
            iframeHeight = function () {
                return (window.innerHeight * 0.7) + 'px';
            },
            isIframeActive = function () {
                return toolbarEl.classList.contains(iframeActiveClass);
            },
            showIframe = function (href) {
                toolbarEl.classList.add(iframeAnimatingClass);
                toolbarEl.classList.add(iframeActiveClass);

                iframeEl.src = externalEl.href = href;
                viewEl.style.height = iframeHeight();
                setTimeout(function() {
                    toolbarEl.classList.remove(iframeAnimatingClass);
                }, animationTime);
            },
            hideIframe = function () {
                toolbarEl.classList.add(iframeAnimatingClass);
                toolbarEl.classList.remove(iframeActiveClass);
                removeActiveBlocksCls();

                externalEl.href = '#';
                viewEl.style.height = '';
                setTimeout(function() {
                    toolbarEl.classList.remove(iframeAnimatingClass);
                }, animationTime);
            },
            removeActiveBlocksCls = function () {
                [].forEach.call(blockEls, function (el) {
                    el.classList.remove(blockActiveClass);
                });
            },
            toggleToolbarClass = function (className) {
                toolbarEl.classList.add(toolbarAnimatingClass);
                if (toolbarEl.classList.contains(className)) {
                    toolbarEl.classList.remove(className);
                } else {
                    toolbarEl.classList.add(className);
                }
                setTimeout(function () {
                    toolbarEl.classList.remove(toolbarAnimatingClass);
                }, animationTime);
            },
            toggleStorageState = function (key, value) {
                if (window.localStorage) {
                    var item = localStorage.getItem(key);

                    if (item) {
                        localStorage.removeItem(key);
                    } else {
                        localStorage.setItem(key, value);
                    }
                }
            },
            restoreStorageState = function (key) {
                if (window.localStorage) {
                    return localStorage.getItem(key);
                }
            },
            togglePosition = function () {
                if (isIframeActive()) {
                    hideIframe();
                } else {
                    toggleToolbarClass(activeClass);
                    toggleStorageState(CACHE_KEY, ACTIVE_STATE);
                }
            };

        toolbarEl.style.display = 'block';

        if (restoreStorageState(CACHE_KEY) == ACTIVE_STATE) {
            toolbarEl.classList.add(activeClass);
        }

        window.onresize = function () {
            if (toolbarEl.classList.contains(iframeActiveClass)) {
                viewEl.style.height = iframeHeight();
            }
        };

        barEl.onclick = function (e) {
            var target = e.target,
                block = findAncestor(target, blockClass);

            if (block && !block.classList.contains(titleClass)
                && e.which !== 2 && !e.ctrlKey // not mouse wheel and not ctrl+click
            ) {
                while (target !== this) {
                    if (target.href) {
                        removeActiveBlocksCls();
                        block.classList.add(blockActiveClass);
                        showIframe(target.href);
                    }
                    target = target.parentNode;
                }

                e.preventDefault();
            }
        };

        toggleEl.onclick = togglePosition;
    }

    function findAncestor(el, cls) {
        while ((el = el.parentElement) && !el.classList.contains(cls));
        return el;
    }

    function renderAjaxRequests() {
        var requestCounter = document.getElementsByClassName('yii-debug-toolbar__ajax_counter');
        if (!requestCounter.length) {
            return;
        }
        var ajaxToolbarPanel = document.querySelector('.yii-debug-toolbar__ajax');
        var tbodies = document.getElementsByClassName('yii-debug-toolbar__ajax_requests');
        var state = 'ok';
        if (tbodies.length) {
            var tbody = tbodies[0];
            var rows = document.createDocumentFragment();
            if (requestStack.length) {
                var firstItem = requestStack.length > 20 ? requestStack.length - 20 : 0;
                for (var i = firstItem; i < requestStack.length; i++) {
                    var request = requestStack[i];
                    var row = document.createElement('tr');
                    rows.appendChild(row);

                    var methodCell = document.createElement('td');
                    methodCell.innerHTML = request.method;
                    row.appendChild(methodCell);

                    var statusCodeCell = document.createElement('td');
                    var statusCode = document.createElement('span');
                    if (request.statusCode < 300) {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_success');
                    } else if (request.statusCode < 400) {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_warning');
                    } else {
                        statusCode.setAttribute('class', 'yii-debug-toolbar__ajax_request_status yii-debug-toolbar__label_error');
                    }
                    statusCode.textContent = request.statusCode || '-';
                    statusCodeCell.appendChild(statusCode);
                    row.appendChild(statusCodeCell);

                    var pathCell = document.createElement('td');
                    pathCell.className = 'yii-debug-toolbar__ajax_request_url';
                    pathCell.innerHTML = request.url;
                    pathCell.setAttribute('title', request.url);
                    row.appendChild(pathCell);

                    var durationCell = document.createElement('td');
                    durationCell.className = 'yii-debug-toolbar__ajax_request_duration';
                    if (request.duration) {
                        durationCell.innerText = request.duration + " ms";
                    } else {
                        durationCell.innerText = '-';
                    }
                    row.appendChild(durationCell);
                    row.appendChild(document.createTextNode(' '));

                    var profilerCell = document.createElement('td');
                    if (request.profilerUrl) {
                        var profilerLink = document.createElement('a');
                        profilerLink.setAttribute('href', request.profilerUrl);
                        profilerLink.innerText = request.profile;
                        profilerCell.appendChild(profilerLink);
                    } else {
                        profilerCell.innerText = 'n/a';
                    }
                    row.appendChild(profilerCell);

                    if (request.error) {
                        if (state !== "loading" && i > requestStack.length - 4) {
                            state = 'error';
                        }
                    } else if (request.loading) {
                        state = 'loading'
                    }
                    row.className = 'yii-debug-toolbar__ajax_request';
                }
                while (tbody.firstChild) {
                    tbody.removeChild(tbody.firstChild);
                }
                tbody.appendChild(rows);
            }
            ajaxToolbarPanel.style.display = 'block';
        }
        requestCounter[0].innerText = requestStack.length;
        var className = 'yii-debug-toolbar__label yii-debug-toolbar__ajax_counter';
        if (state == 'ok') {
            className += ' yii-debug-toolbar__label_success';
        } else if (state == 'error') {
            className += ' yii-debug-toolbar__label_error';
        }
        requestCounter[0].className = className;
    };

    var proxied = XMLHttpRequest.prototype.open;

    XMLHttpRequest.prototype.open = function (method, url, async, user, pass) {
        var self = this;
        /* prevent logging AJAX calls to static and inline files, like templates */
        if (url.substr(0, 1) === '/' && !url.match(new RegExp("{{ excluded_ajax_paths }}"))) {
            var stackElement = {
                loading: true,
                error: false,
                url: url,
                method: method,
                start: new Date()
            };
            requestStack.push(stackElement);
            this.addEventListener("readystatechange", function () {
                if (self.readyState == 4) {
                    stackElement.duration = self.getResponseHeader("X-Debug-Duration") || new Date() - stackElement.start;
                    stackElement.loading = false;
                    stackElement.statusCode = self.status;
                    stackElement.error = self.status < 200 || self.status >= 400;
                    stackElement.profile = self.getResponseHeader("X-Debug-Tag");
                    stackElement.profilerUrl = self.getResponseHeader("X-Debug-Link");
                    renderAjaxRequests();
                }
            }, false);
            renderAjaxRequests();
        }
        proxied.apply(this, Array.prototype.slice.call(arguments));
    };

})();
</script>
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

var searchphrase = "";
var blog_pages_count = <?=$pages->pageCount;?>;
</script>





