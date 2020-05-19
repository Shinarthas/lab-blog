<?
use common\models\Contacts;
use common\models\Post;
use common\models\PostToCategory;
use frontend\widgets\MultiLang\MultiLang;
use yii\helpers\Html;
use yii\helpers\Url;
$my_requests = Contacts::myRequestsList();

                $industries = Post::find()
                    ->select([Post::tableName().'.seo_url',Post::tableName().'.title'])
                    ->where(['status'=>Post::POST_ACTIVE])
                    ->andWhere(Post::tableName().'.date_published < '.time())
                    ->orderBy([Post::tableName().'.date_published'=>SORT_DESC])
                    ->joinWith('category')
                    ->andWhere([PostToCategory::tableName().'.id_category'=>20])
					->all();
 ?>

<style>

    #preloader{
        position: fixed;
        z-index: 10000;
        width: 100%;
        height: 100%;
        background: #151515;

    }

    @keyframes preloaderHide{
        from{
            opacity: 1;
        }
        to{
            opacity: 0;
        }
    }

    .load-per-sent{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 48px;
        color: #fff;
    }

    #canvas{
        width: 160px;
        height: 160px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .preloader-clouds{
        width: 100%;
        height: 100%;
        background-size: cover;
    }


    .header__social-mobile-control{display:none;}
    .header__social{display:none;}
    .header__social-mobile-control{display:block;position:absolute;z-index:100;top:0;right:0;width:90px;height:70px;background:url('/images/social.svg') no-repeat 28px 50%;cursor:pointer;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
    .header_white .header__social-mobile-control,
    .headerWhite .header__social-mobile-control{background:url('/images/social2.svg') no-repeat 36px 50%;}
    .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #000 !important;}
    .header__social{display:block;position:absolute;z-index:100;top:70px;right:0;overflow:hidden;visibility:hidden;}
    .header__social_visible{display:block;visibility:visible;}
    .header__social-link{position:relative;display:block;padding:0 80px 0 30px;line-height:60px;font-size:20px;font-weight:600;color:#fff !important;background:#000;text-align:right;text-decoration:none;transform:translateX(100%);transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
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
    .main{position:relative;z-index:101;}
    .second-screen__mass-media{text-align:center;}
    .first-screen1{position: absolute;top: 0;left: 0;width: 100%;height: 100%;clip: rect(auto,auto,auto,auto);}
    .first-screen{background:#0D0D0D;position:relative;height: 700px;}
    .first-screen__title{line-height:50px;font-size:40px;color:#ffffff;font-family:'Raleway Bold', sans-serif;margin:0;}
    .first-screen__fixed{position:fixed;top:0;left:0;right:0;}
    .first-screen__desc{line-height:40px;font-size:25px;color:#ffffff;margin-bottom:14px; margin-top: 0;}
    .first-screen__content{margin:0 auto;padding-top:240px;max-width:960px;}
    .first-screen__textures{position:fixed;z-index:101;top:0;left:0;right:0;height:730px;pointer-events:none;}
    .first-screen__lab3m{position:absolute;top:384px;left:calc(50% - 128px);left:-webkit-calc(50% - 128px);-moz-left:calc(50% - 128px);width:685px;}
    .first-screen__flash{position:absolute;left:48%;left:calc(50% + 15px);width:554px;z-index:2;}
    .first-screen__clouds{position:absolute;z-index:102;top:0;left:0;bottom:0;width:100%;background-repeat:repeat-x;background-position:50% 100%;pointer-events:none;}
    .button-sic_center{text-align:center;}
    .button-sic__item{position:relative;z-index:0;display:inline-block;border-radius:25px;background-color:#ffba00;box-shadow:0 8px 15px 0 rgba(128, 56, 9, 0.07);overflow:hidden;}
    .button-sic__item_w280{margin:0 10px;}
    .button-sic__item:first-child{margin-left:0;}
    .button-sic__item:last-child{margin-right:0;}
    .button-sic__link{position:relative;display:block;text-align:center;line-height:50px;padding: 12px 28px;font:20px 'Work Sans', sans-serif;border-radius:25px;color:#ffffff;transition:color 300ms;}
    .button-sic__item_w280 .button-sic__link{padding:0;width:280px;text-align:center;}
    .button-sic__link:active{top:1px;}
    .button-sic__link::before,
    .button-sic__link::after{position:absolute;z-index:-1;left:0;bottom:100%;content:'';width:100%;height:100%;transition:transform 300ms cubic-bezier(0.75, 0, 0.125, 1);}
    .button-sic__link::before{background-color:#6927ff;}
    .button-sic__link::after{background-color:#6927ff;}
    .button-sic__link:hover{color:#ffffff;}
    .button-sic__link:hover::before,
    .button-sic__item a:hover::after{transform:translate3d(0, 100%, 0);}
    .button-sic__link:hover::after{transition-delay:175ms;}
    .second-screen{
        position:relative;
        z-index:500;
        background:#151515;
    }
    .second-screen__content{padding:150px 0;}
    .second-screen__hr{padding:75px 0;background:url(/images/main/dots.svg) repeat-x 50% 50%;text-align:center;}
    .second-screen__hr p{display:inline-block;line-height:20px;background:#151515;font-size:13px;font-weight:600;color:#fff;letter-spacing:1px;text-transform:uppercase;margin-bottom:0; padding: 0 15px}
    .second-screen__mass-media img{margin:0 35px;opacity:0;transform:translateY(100px);animation:massmediaimg 600ms linear;-webkit-animation:massmediaimg 600ms linear;animation-iteration-count:1;-webkit-animation-iteration-count:1;animation-fill-mode:forwards;-webkit-animation-fill-mode:forwards;}
    .second-screen__mass-media img:first-child{margin-left:0;}
    .second-screen__mass-media img:last-child{margin-right:0;}
    .second-screen__mass-media img:nth-child(2){animation-delay:0s;-webkit-animation-delay:0s;}
    .second-screen__mass-media img:nth-child(2){animation-delay:300ms;-webkit-animation-delay:300ms;}
    .second-screen__mass-media img:nth-child(3){animation-delay:600ms;-webkit-animation-delay:600ms;}
    @keyframes massmediaimg{50%{opacity:1;}
        100%{opacity:1;transform:translateY(0);}
    }
    .second-screen__logo{padding-bottom:40px;text-align:center;margin-top:20px;}
    .second-screen__logo img{transform-origin:50% 50%;animation:rotate infinite 4s linear;}
    @keyframes rotate{100%{transform:rotate(360deg);}
    }
    .second-screen__arrow,
    .main.wrapper2 .arrow,
    .main.wrapper3 .arrow{height:40px;background:url('/images/arrow/white.svg') no-repeat 50% 50%;}
    .second-screen__title{line-height:40px;font-size:32px;font-weight:600;font-family:'Work Sans', sans-serif;color:#fff;text-align:center;letter-spacing:3px;text-transform:uppercase;margin-bottom:5px;}
    .second-screen__deploy{margin:-5px auto 0;max-width:600px;}
    .second-screen__desc{line-height:36px;font-size:18px;color:#fff;text-align:center;}
    .second-screen__desc_hidden{display:none;}
    .second-screen__desc_last-part-active{height:auto;}
    .second-screen__read-wrapper{padding-top:20px;text-align:center;}
    .second-screen__read{position:relative;display:inline-block;padding-right:20px;line-height:20px;font-size:12px;font-weight:600;color:#ff4200;letter-spacing:1.8px;text-transform:uppercase;cursor:pointer;}
    .second-screen__read img{position:absolute;top:5px;right:0;transition-duration:250ms;}
    .second-screen__read.active img{transform:rotate(180deg);}
    a{text-decoration:none !important;}
    body{line-height:20px;font-size:14px;font-family:'Work Sans', sans-serif;color:#000000;background-color:#ffffff;overflow-x:hidden;}
    .container{max-width:990px;width:100%;}
    div.siteWrapper{min-height:100%;}
    .main{position:relative;z-index:101;}
    .header{background: #000;position:absolute;z-index:100;top:0;left:0;right:0;}
    .header__content{margin:0 auto; padding: 0 15px}
    .header__content:after{position:absolute;content:'';bottom:-1px;left:30px;right:30px;height:1px;}
    .header__logo{position:relative;float:left;height:70px;line-height:70px;}
    .header__logo .tt1{display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;}
    .header__logo .tt2{position:absolute;left:0;transform:translateX(0%);display:inline-block;opacity:0;visibility:hidden;transition-duration:300ms;}
    .header__logo .tt3{position:absolute;left:50%;transform:translateX(-50%);display:inline-block;opacity:0;visibility:hidden;transition-duration:300ms;}
    .header__logo img{vertical-align:middle;}
    .header__logo:active{top:1px;}
    .header__menu{padding-top:20px;text-align:right;}
    .header__menu-link{position:relative;display:inline-block;margin:0 10px;line-height:30px;font-size:18px;font-weight:500;color:#ffffff !important;text-decoration:none;margin-right: 15px!important;;}
    .header__menu-link:active{top:1px;}
    .header__menu-link:hover:after{width: 100%;}
    .header__menu-link:nth-last-child(2){}
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
    .headerWhite.header .header__menu .header__menu-link:hover:after{width:100%;background-color:#000;}
    .headerWhite.header .header__logo .tt2{position:static;display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;transform:none;}
    .bg-video{position: absolute;top: 0;left:0;width: 100%;}
    @media only screen and (-webkit-min-device-pixel-ratio:2){div.headerWhite a.link:hover:after{display:none;}}
    div.blockTouch{background-color:#fff5de;box-shadow:inset 0 -1px 0 0 #151515;}
    div.blockTouch div.content{margin:0 auto;padding:80px 0;max-width:960px;width: 100%;}
    @media (max-width:991px){.main.wrapper3{overflow-x:hidden;}
        .top-header{position:fixed;top:0;left:0;right:0;width:100%;}
        .header{position:fixed;z-index:1000;}
        .header_white{background:#000;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
        .header__content{width:100%;text-align:center;}
        .header_white .header__content:after{background:transparent;}
        .header__logo{visibility:hidden;float:none;}
        .header_white .tt1{opacity:0;visibility:hidden;}
        .header_white .tt2{opacity:1;visibility:visible;}
    }
    .buttonSicWrapper {line-height:0;font-size:0;}
    .buttonSicWrapper.center {text-align:center;}
    .buttonSicWrapper.center div.buttonSic a{position:relative;z-index:1;display:block;padding:0 40px;height:50px;line-height:50px;font-size:20px;font-weight:500;border-radius:25px;text-decoration:none;color:#ffffff;transition:color 300ms;}
    .buttonSic {position:relative;z-index:0;display:inline-block;margin:0 10px;height:50px;border-radius:25px;background-color:#ffba00;box-shadow:0 8px 15px 0 rgba(128, 56, 9, 0.07);overflow:hidden;}
    .buttonSic:first-child {margin-left:0;}
    .buttonSic:last-child {margin-right:0;}
    .buttonSic input {position:relative;z-index:1;display:block;padding:0 40px;height:50px;line-height:50px;font-size:20px;font-family:'Work Sans', sans-serif;text-decoration:none;color:#ffffff;transition:color 300ms;background:transparent;border:medium none;}
    .buttonSic.w280 input {padding:0;width:280px;text-align:center;}
    .buttonSic.w280::before,div.buttonSic.w280::after {position:absolute;z-index:-1;left:0;bottom:100%;content:'';width:100%;height:100%;transition:transform 300ms cubic-bezier(0.75, 0, 0.125, 1);}
    .buttonSic.w280::before {background-color:#6927ff;}
    .buttonSic.w280::after {background-color:#6927ff;}
    .buttonSic input:hover {color:#ffffff;}
    .buttonSic.w280:hover::before,div.buttonSic.w280:hover::after {transform:translate3d(0, 100%, 0);}
    .buttonSic.w280:hover::after {transition-delay:175ms;}
    /**/
    .text-center{text-align: center;}
    @media (max-width:991px){.top-header{position:fixed;top:0;left:0;right:0;width:100%;}
        .header{position:fixed;z-index:1000;}
        .header_white{background:#ffffff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
        .header__content{width:100%;text-align:center;}
        .header_white .header__content:after{background:transparent;}
        .header__logo{visibility:hidden;float:none;}
        .header_white .tt1{opacity:0;visibility:hidden;}
        .header_white .tt2{opacity:1;visibility:visible;}
        .header_white .header__menu-mobile-control{background-image:url('/images/menu2.svg');}
        .headerWhite .header__menu-mobile-control{background-image:url('/images/menu2.svg');}
        .header__menu-mobile-control_close{background-image:url('/images/close.svg') !important;}
        .header__menu{position:fixed;z-index:101;top:0;left:0;right:0;height:0;padding-top:0;background:#000;overflow:hidden;visibility:hidden;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header__menu_visible{height:100%;visibility:visible;}
        .header__menu-link{display:block;margin:0;line-height:60px;font-size:24px;font-weight:400;text-align:center;}

        .header__menu-link:first-child{margin-top:70px;}
        .header__menu-link:last-child{margin-bottom:0px;}
        .header__menu-link:active{top:0;}
        .header__menu_visible .header__menu-link{opacity:1;}
        .header__menu-link:nth-last-child(2){margin-left:auto;}
        .header__menu-link:hover:after,
        .headerWhite.header .header__menu .header__menu-link:hover:after{width: auto;}
        .header__menu-link:last-child:after{background:transparent;}
        /**/.header__social-mobile-control{display:block;position:absolute;z-index:100;top:0;right:0;width:90px;height:70px;background:url('/images/social.svg') no-repeat 28px 50%;cursor:pointer;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header_white .header__social-mobile-control,
        .headerWhite .header__social-mobile-control{background:url('/images/social2.svg') no-repeat 28px 50%;}
        .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #000 !important;}
        .header__social{display:block;position:absolute;z-index:100;top:70px;right:0;overflow:hidden;visibility:hidden;}
        .header__social_visible{display:block;visibility:visible;}
        .header__social-link{position:relative;display:block;padding:0 80px 0 30px;line-height:60px;font-size:20px;font-weight:600;color:#fff !important;background:#000;text-align:right;text-decoration:none;transform:translateX(100%);transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
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
        /**/.first-screen__light{background-position:50% 0;}
        .first-screen__lab3m{position:absolute;top:140px;left:50%;transform:translateX(-50%) !important;height:144px;width:500px;visibility:visible;transition-duration:2000ms;}
        .first-screen__lab3m_scale{transition-duration:2000ms;transform:translateX(-50%) scale(0.5) !important;}
        .first-screen__flash{display:none;}
        .first-screen__content{padding-top:350px;width:100%;text-align:center;}
        .first-screen__title{padding:0px 20px 12px;font-size:50px;}
        .first-screen__desc{padding:0 30px 31px;font-size:30px;letter-spacing:-.3px;margin-bottom:1px;}
        /**/
        .second-screen__title{letter-spacing:3px;}
        .second-screen__mass-media{position:relative;}
        .second-screen__content{padding:150px 30px 131px;width:auto;overflow:hidden;}
        .second-screen__mass-media img:last-child,
        .second-screen__mass-media img:first-child,
        .second-screen__mass-media img{margin:30px 35px 50px;}
        .second-screen__arrow {margin: 5px 0 -5px;}
        .second-screen__hr{padding:26px 0 26px;}
        .second-screen__logo{margin-top:69px;}}
    @media screen and (max-width: 767px){
        .bg-video{display: none;}
        .first-screen__light{background-size:auto 70%;}
        .first-screen__content{padding-top:287px;}
        .first-screen__desc{padding:0 20px 45px;line-height:30px;font-size:20px;}
        .first-screen__title{line-height:40px;font-size:30px;padding-bottom:1px;}
        .first-screen__lab3m{top:120px;height:112px;}
        .first-screen__desc{padding:0 20px 45px;line-height:30px;font-size:20px;}
        .second-screen__hr{margin-top:46px;}
        .second-screen__arrow{margin:5px 0 -5px;}

        .second-screen__content{padding-top:115px;}
        .second-screen__mass-media{padding-bottom:0;}
        .second-screen__mass-media img:first-child{position:static;transform:none;margin:0 auto 90px;}
        .second-screen__mass-media img{display:block;margin:0 auto 90px;}
        .second-screen__mass-media img:last-child{margin:0 auto;}
        .second-screen__deploy{width:auto;}
    }

    @media screen and (max-width: 493px){
        .first-screen__lab3m{
            width: 425px;
        }
    }

    input.form-control{
    color: white!important;
    }
    @media only screen and (max-width:449px){.header__content:after{left:20px;right:20px;}
        .header__menu-mobile-control{width: 70px;height: 60px;background-position-x: 21px;}
        .header_white .tt2,
        .headerWhite.header .header__logo .tt2{opacity:0;visibility:hidden;}
        .header_white .tt3,
        .headerWhite .header__logo .tt3{opacity:1;visibility:visible;}
        .header__social-mobile-control{width:70px;height:60px;background-position-x:18px;}
        .headerWhite .header__social-mobile-control{background-position-x:16px;}
        .header__content:after{left:20px;right:20px;}
        .header__logo{height:60px;line-height:60px;}
        .header_white .header__social-mobile-control{background-position-x:18px;}
        .header__social-mobile-control{height: 60px;}
        .header__menu_visible{padding-top:0px;}
        .lafka svg{width: 100%;}
        .header__social-mobile-control{width:70px;height:60px;background-position-x:18px;}
        .header__social{top:60px;}
        .header__social-link{padding:0 70px 0 20px;}
        .header_white .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #000;}
        .first-screen{height:560px;}
        .first-screen__light{background-size:auto 50%;}
        .first-screen__lab3m{top:110px;height:76px; width: 380px;}
        .first-screen__content{padding-top:220px;}
        .first-screen__title{padding:0 10px;line-height:40px;font-size:29px;}
        .second-screen__mass-media img,
        .second-screen__mass-media img:first-child{margin-bottom:70px;}
        .second-screen__mass-media img:last-child{margin-bottom:5px;}
        .first-screen__desc{padding-bottom:37px;letter-spacing:0px;}
        .second-screen__title{letter-spacing:3.2px;}
        .second-screen__content{padding-top:61px;}
        .second-screen__content{padding:61px 10px 115px;width:auto;}
        .second-screen__mass-media img{height:100px;}
        .second-screen__deploy{padding:0 10px;}
        .second-screen__hr{margin-top:52px;}

    }

    @media only screen and (max-width: 380px){
        .first-screen__lab3m{
            width: 300px;
        }
    }

    @media (max-height:400px){.header__menu-link:first-child{margin-top:20px !important;}}
    @media (max-height:400px) and (max-width:700px){.header_white .header__social-mobile-control_active{background:url(/images/social.svg) no-repeat 18px 50%, #000 !important;}
        .footer{display: none!important;}
        .heading{color:white;}
        .media{background: #0D0D0D;}

</style>

<div class="header__content" style="background: #000">
    <div class="header__logo">
        <a href="<?=Url::to(['site/index','language'=>Yii::$app->language])?>" class="tt1 dis-n1">
            <img class="max-d" style="max-width: 43px; max-width: 100px; margin-top: 10px" src="/images/l3m-t.png" alt="lab3m-logo">
        </a>
        <a href="<?=Url::to(['site/index','language'=>Yii::$app->language])?>" class="tt1 dis-b1">
            <img class="min-d" style="max-width: 43px;" src="/images/header/logo.png" alt="lab3m-logo">
        </a>
        <style>
        .max-d{
                display: inline;
            }
        .min-d{
                display: none;
            }
        @media(max-width: 767px){
            .min-d{
                display: inline;
            }
            .max-d{
                display: none;
            }
        }
        
        </style>
    </div>
    <div class="header__menu-mobile-control"></div>

    <div class="header__menu" style="background: #000;z-index: 9999;" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
        <a itemprop="url" href="<?=Url::to(['site/index','language'=>Yii::$app->language])?>" class="header__menu-link"><span itemprop="name"><?= Yii::t('app', 'text_header_home') ?></span></a>
        <a itemprop="url" href="<?=Url::to(['blog/index','language'=>Yii::$app->language])?>" class="header__menu-link"><span itemprop="name"><?= Yii::t('app', 'text_header_blog') ?></span></a>
        <a itemprop="url" href="<?=Url::to(['works/index','language'=>Yii::$app->language])?>" class="header__menu-link"><span itemprop="name"><?= Yii::t('app', 'text_header_solutions') ?></span></a>
        <a itemprop="url" href="<?=Url::to(['services/index','language'=>Yii::$app->language])?>" class="header__menu-link"><span itemprop="name"><?= Yii::t('app', 'text_header_services') ?></span></a>
        <a itemprop="url" href="<?=Url::to(['company/index','language'=>Yii::$app->language])?>" class="header__menu-link"><span itemprop="name"><?= Yii::t('app', 'text_header_about') ?></span></a>
        <a itemprop="url" href="<?=Url::to(['contacts/index','language'=>Yii::$app->language])?>" class="header__menu-link"><span itemprop="name"><?= Yii::t('app', 'text_header_contacts') ?></span></a>
        <?= MultiLang::widget(['cssClass'=>'pull-right language']); ?>
    </div>
    <div  style="background-color: #000; " class="clearfix cor-fix1"></div>
    <style>
    @media(min-width: 768px){
    .cor-fix1{
        height: 10px!important;
    }
    }</style>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/isInViewport.js"></script>
    <script>
    $('video').each(function(){
        if ($(this).is(":in-viewport")) {
            $(this)[0].play();
        } else {
            $(this)[0].pause();
        }
    })
    </script>

</div>

