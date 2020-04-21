<?php
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
    background-image: url(/images/clouds1.png), url(/images/clouds2.png);
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
.first-screen__light{position:fixed;top:0;left:0;right:0;height:730px;background:url(/images/light.png) no-repeat calc(50% + 220px) 0;pointer-events:none;}
.first-screen__title{line-height:50px;font-size:40px;color:#ffffff;font-family:'Raleway Bold', sans-serif;margin:0;}
.first-screen__fixed{position:fixed;top:0;left:0;right:0;}
.first-screen__desc{line-height:40px;font-size:25px;color:#ffffff;margin-bottom:14px; margin-top: 0;}
.first-screen__content{margin:0 auto;padding-top:240px;max-width:960px;}
.first-screen__textures{position:fixed;z-index:101;top:0;left:0;right:0;height:730px;pointer-events:none;}
.first-screen__lab3m{position:absolute;top:384px;left:calc(50% - 128px);left:-webkit-calc(50% - 128px);-moz-left:calc(50% - 128px);width:685px;}
.first-screen__flash{position:absolute;left:48%;left:calc(50% + 15px);width:554px;z-index:2;}
.first-screen__clouds{position:absolute;z-index:102;top:0;left:0;bottom:0;width:100%;background-image:url(/images/clouds1.png), url(/images/clouds2.png);background-repeat:repeat-x;background-position:50% 100%;pointer-events:none;}
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
.header__menu-link{position:relative;display:inline-block;margin:0 10px;line-height:30px;font-size:18px;font-weight:500;color:#ffffff !important;text-decoration:none;}
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
.first-screen__clouds{background-image:url('/images/clouds1.png');}
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
.second-screen__mass-media img{height:63px;}
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
<style>
.dis-n1{
        display:block!important;
    }
    .dis-b1{
        display:none!important;
    }
@media (max-width: 767.98px) {
    .dis-n1{
        display:none!important;
    }
    .dis-b1{
        display:block!important;
    }
}
</style>
    <div class="header__content" style="background: #000">
        <div class="header__logo">
            <a href="/" class="tt1 dis-n1">
                <img style="max-width: 43px; max-width: 100px;" src="/images/l3m.png" alt="lab3m-logo">
            </a>
            <a href="/" class="tt1 dis-b1">
                <img style="max-width: 43px;" src="/images/header/logo.png" alt="lab3m-logo">
            </a>
            
        </div>
        <div class="header__menu-mobile-control"></div>
        <div class="header__menu" style="background: #000;" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
            <!--<a itemprop="url" href="/services" class="header__menu-link"><span itemprop="name">Services</span></a>
            <a itemprop="url" href="/works" class="header__menu-link"><span itemprop="name">Works</span></a>
            <a itemprop="url" href="/blog" class="header__menu-link"><span itemprop="name">Blog</span></a>
            <a itemprop="url" href="/company" class="header__menu-link"><span itemprop="name">Company</span></a>-->
            <a itemprop="url" href="/portfolio" class="header__menu-link"><span itemprop="name">Портфолио</span></a>
           
            <a itemprop="url" href="/contacts" class="header__menu-link"><span itemprop="name">Контакты</span></a>
            <div style="display: inline!important;" class="btn-group header-cor1">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: black;border: 1px solid white !important;">
            Русский
            </button>
            <div class="dropdown-menu dropdown-menu-right" style="background: black;">
                <a href="/"><button class="dropdown-item" type="button" style="color: white;">English</button></a>
                <button class="dropdown-item" type="button" style="color: white;">简体中文</button>
                <a href="/ru"><button class="dropdown-item active" type="button" style="color: white;">Русский</button></a>
            </div>
            <style>
            .dropdown-item.active{
                background-color: #5a5a5a!important;
            }
            .dropdown-item:hover{
                background-color: #5a5a5a!important;
            }
            .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active, .show>.btn-secondary.dropdown-toggle {
                border: none!important;
            }
            @media (max-width: 991px){
                .header-cor1{
                padding-right: 29px!important;
            }
            }
            </style>
            </div>
        </div>
        <div class="header__social">
            <a href="https://clutch.co/profile/lab3m" class="header__social-link">Clutch <img src="/images/header/clutch.svg" alt="clutch"></a>
            <!-- <a href="https://twitter.com/Thunder_rise" class="header__social-link">Twitter <img src="/images/header/twitter.svg" alt="twitter"></a> -->
            <a href="https://www.linkedin.com/company/lab3m" class="header__social-link">Linkedin <img src="/images/header/linkedin.svg" alt="linkedin"></a>
            <a href="https://dribbble.com/lab3m" class="header__social-link">Dribbble <img src="/images/header/dribble.svg" alt="dribble"></a>
            <a href="https://github.com/lab3m" class="header__social-link">GitHub <img src="/images/header/github.svg" alt="github"></a>
<!--            <a href="https://www.facebook.com/lab3m" class="header__social-link">Facebook <img src="/images/header/facebook.svg" alt="facebook"></a>-->
        </div>
        <div  style="background-color: #000;" class="clearfix"></div>
    </div>
</div>
<link href="//db.onlinewebfonts.com/c/2206d6cc490084998d531e8c1b2cbb4a?family=Druk+Wide+Bold" rel="stylesheet" type="text/css"/>
<section class="first-screen">
	<!--<video class="bg-video" preload="metadata" autoplay="autoplay" playsinline loop="loop" muted="muted" style="opacity: 0.1;">
	    <source src="/videos/bgvideo.webm" type="video/webm">
	</video>-->
    <div class="container">
        <div class="row">
            <div class="first-screen1">
                <div style="display:none" class="first-screen__light"></div>
                <div class="first-screen__textures">
                    <img style="display:none" class="first-screen__lab3m" src="/images/main/logo.png" alt="lab3m">
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
                strings: ["Эффективность,", "Прозрачность,", "Безопасность"],
                speed: 75,
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
                <div class="second-screen__hr"><p>Они пишут о наших клиентах</p></div>
                <div class="second-screen__logo"><img src="/images/main/logo.png" alt="lab3m"></div>
                <p class="second-screen__title" style="margin-top: 32px"><img src="/images//lab3m.png" alt="lab3m"></p>
                <div class="second-screen__arrow"></div>
                <div class="second-screen__deploy">
                    <p class="second-screen__desc" style="color: #fff; margin: 18px 0">
                    Lab3M - продукто-ориентированная компания полного цикла работающая над сложными решениями: финтех, интернет вещей, мобильная разработка, блокчейн. Мы видим потенциал в данных индустриях и не видим причин его не воплотить. Наша компания не ограничена отделом разработки, а сочетает в себе отделы дизайна, маркетинга, бизнес аналитики и технической поддержки.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="first-screen" style="height: 110vh;">
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
color: #FFFFFF; margin-bottom: 0; margin-top: 40px">Наши решения</h2>
<div class="second-screen__arrow"></div>
<h2 style="color:#fff;font-size: 24px;">Мы запускаем передовые финтех продукты</h2>





        </div>
        <!--<div class="col-12 text-center" style="">
        <img style="margin-bottom: 20px;    max-width: 280px;" class="img-fluid" src="/images/trade.png" alt="trade"></div>
        </div>-->
        <div class="col-12 col-lg-3" style="margin-top: 20px;">
        <!--<div><img style="margin-bottom: 60px" class="img-fluid" src="/images/l3m.png" alt=""></div>-->
        <img style="margin-bottom: 20px;    max-width: 280px;" class="img-fluid dis-none-t" src="/images/trade.png" alt="trade">
        <h2 style="color: #fff; font-size: 24px; color: #FFFFFF; line-height: 29px;" class="mb-4">Неограниченные возможности торговли и хранения</h2>
        <p style="font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 150%;
letter-spacing: 0.1em;
color: #FFFFFF;">Гибкая платформа с горячим и холодным хранением, позволяющая торговать цифровыми активами и управлять ими в одном месте.</p>
        <div class="dis-none-t" style="font-style: normal; margin-top: 10px;
font-weight: normal;
font-size: 16px;
line-height: 17px;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><img style="margin-right:10px;    float: left;
    margin-bottom: 15px;" src="/images/v.png" alt="check mark" >Кроссплатформенная мульти-аккаунтная торговля</div>
<div class="dis-none-t" style="font-style: normal; margin-top: 10px;
font-weight: normal;
font-size: 16px;
line-height: 17px;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><img style="margin-right:10px;    float: left;
    margin-bottom: 15px;" src="/images/v.png" alt="check mark" >Прогнозы на основе ИИ</div>
<div class="dis-none-t" style="font-style: normal; margin-top: 10px;
font-weight: normal;
font-size: 16px;
line-height: 17px;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><img style="margin-right:10px;    float: left;
    margin-bottom: 15px;" src="/images/v.png" alt="check mark" >Гибкая ролевая архитектура</div>
<div class="dis-none-t" style="font-style: normal; margin-top: 10px;
font-weight: normal;
font-size: 16px;
line-height: 17px;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><img style="margin-right:10px;    float: left;
    margin-bottom: 15px;" src="/images/v.png" alt="check mark" >Прямое соединение API</div>
<div class="dis-none-t" style="font-style: normal; margin-top: 10px;
font-weight: normal;
font-size: 16px;
line-height: 17px;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><img style="margin-right:10px;    float: left;
    margin-bottom: 15px;" src="/images/v.png" alt="check mark" >Холодные и горячие кошельки</div>
<div class="dis-none-t" style="font-style: normal; margin-top: 10px;
font-weight: normal;
font-size: 16px;
line-height: 17px;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);"><img style="margin-right:10px;    float: left;
    margin-bottom: 15px;" src="/images/v.png" alt="check mark" >Расширенное управление портфелем</div>
        </div>
        <div class="col-12 col-lg-8" style="margin-top: 20px;">
        <video style="width:100%" preload="metadata" autoplay="autoplay" playsinline loop="loop" muted="muted">
            <source src="/images/trade.webm" type="video/webm">
        </video>
        <!--<img class="img-fluid" src="/images/interface.png" alt="">-->
        </div>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








<section id="section-services" class="ftco-section services-section" style="background-color: #151515; padding-top:0!important">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3" style="padding-top:100px">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 style="color: #fff" class="mb-4">Сервисы</h2>
                    <p style="color: #fff">Мы сделаем блокчейн частью вашего бизнеса</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center order-md-last">
                            <img src="/images/serv/1.png" alt="">
                        </div>
                        <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                            <h3 class="heading">Финансовые и платежные решения
                            </h3>
                            <p class="mb-0 dis-none-t">Когда мы разрабатываем блокчейн приложения, мы интегрируем элемент децентрализации в ваше платежное приложение, чтобы поддерживать неизменный учет и устранять случаи мошенничества.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="/images/serv/2.png" alt="">
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Создание MVP (минимально жизнеспособного продукта)</h3>
                            <p class="mb-0 dis-none-t">Мы постоянно прощупываем почву рынка перед разработкой полноценного децентрализованного приложения с разработкой и запуском MVP.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center order-md-last">
                            <img src="/images/serv/3.png" alt="">
                        </div>
                        <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                            <h3 class="heading">Разработка Крипто Биржи
                            </h3>
                            <p class="dis-none-t">Мы создаем защищенную от взлома и мошенничества платформу для обмена криптовалютами в реальном времени или DEX.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <img src="/images/serv/4.png" alt="">
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Разработка и Аудит Смарт-Контрактов
                            </h3>
                            <p class="dis-none-t">От финансов до финтех-технологий, от СМИ до государственного сектора - наши смарт контракты делают бизнес-экосистему бесконфликтной.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center order-md-last">
                        <img src="/images/serv/5.png" alt="">
                        </div>
                        <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                            <h3 class="heading">Автоматические Торговые Терминалы
                            </h3>
                            <p class="dis-none-t">Мы строим высокопродуктивную экосистему хранения и торговли цифровыми активами вокруг нашего программного ядра для расширения индивидуальных услуг.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <img src="/images/serv/6.png" alt="">
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Разработка Крипто Кошельков
                            </h3>
                            <p class="dis-none-t">В рамках наших услуг мы создаем приложения кошельки, в которых хранятся сотни криптовалют, а также информация о балансе вашего кошелька и истории покупок.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center order-md-last">
                        <img src="/images/serv/7.png" alt="">
                        </div>
                        <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                            <h3 class="heading">Услуги IEO (первичное предложение обмена)
                            </h3>
                            <p class="dis-none-t">Наши всесторонние услуги IEO включают подготовку вашей идеи для инвесторов, создание криптовалюты для распространения, разработку White Paper и, наконец, продвижение вашего IEO.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                        <img src="/images/serv/8.png" alt="">
                        </div>
                        <div class="media-body pl-4">
                            <h3 class="heading">Индивидуальные блокчейн решения
                            </h3>
                            <p class="dis-none-t">Мы предлагаем индивидуальные блокчейн решения для интеграции с вашими существующими мобильными приложениями, что делает их децентрализованными.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--<section class="block block2 phones" data-target=".block2 .op-block">
    <div class="clip">-->
    <section style="background: #151515; padding:150px 15px">
	<div>
	    <div class="container">
	        <div class="row">
	        	<div class="fix-case">
                <div class="row" style="">
                <div class="col-12 col-md-6" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style1">Lorem ipsum, dolor</div>
                            <div class="p-style1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque quas doloribus sunt repellendus ad, at cumque deleniti corporis possimus, quibusdam ipsa odio aliquid inventore ab labore numquam, veniam neque nisi!</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style1">Lorem ipsum, dolor</div>
                            <div class="p-style1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque quas doloribus sunt repellendus ad, at cumque deleniti corporis possimus, quibusdam ipsa odio aliquid inventore ab labore numquam, veniam neque nisi!</div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h3 class="h3-style1">LATEST INSIGHTS</h3>
                </div>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
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
    <!--<section style="background-color: #151515;">
        <div class="container">
            <div class="row" style="padding-bottom: 100px">
                <div class="col-12 col-md-6" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style1">Lorem ipsum, dolor</div>
                            <div class="p-style1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque quas doloribus sunt repellendus ad, at cumque deleniti corporis possimus, quibusdam ipsa odio aliquid inventore ab labore numquam, veniam neque nisi!</div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style1">Lorem ipsum, dolor</div>
                            <div class="p-style1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque quas doloribus sunt repellendus ad, at cumque deleniti corporis possimus, quibusdam ipsa odio aliquid inventore ab labore numquam, veniam neque nisi!</div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h3 class="h3-style1">LATEST INSIGHTS</h3>
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
                <div class="col-12 col-md-4" style="padding: 15px">
                    <div  style="width: 100%;box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.08), 0 2px 4px 0 rgba(85, 98, 98, 0.08);border-radius: 7px; background-color: #0D0D0D; overflow: auto;">
                        <img style="width: 100%" src="#" alt="">
                        <div style="padding:17px">
                            <div class="h-style2">Lorem ipsum, dolor</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <section style="background-color: #0D0D0D;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" style="padding:50px 15px 160px 15px">
                    <h3 class="h-style3">Подпишитесь на нашу новостную рассылку</h3>
                    <p class="p-style3">Получайте последние сводки о обновлениях, новости и блоги</p>
                    <div style="height: 60px; text-align: center;">
                    <input placeholder="Введите ваш почтовый адрес" style="margin: 50px 0;max-width: 525px; width:100%; padding: 18px 24px;font-style: normal;font-weight: normal;font-size: 16px;line-height: 140%;color: #313131;height: 100%;" type="text">
                    <a style="padding: 19px 60px;font-weight: 600;
font-size: 18px;
line-height: 21px;
text-align: center;
letter-spacing: 0.1em;
background: #6927FF;
color: #FFFFFF;" href="#">Отправить</a>
                    </div>
                    

                </div>

            </div>
        </div>
    </section>
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
        text-align: center;
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
