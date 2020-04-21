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
.main{position:relative;z-index:101;}
.second-screen__mass-media{text-align:center;}
.first-screen1{position: absolute;top: 0;left: 0;width: 100%;height: 100%;clip: rect(auto,auto,auto,auto);}
.first-screen{background:#151515;position:relative;height:730px;}
.first-screen__light{position:fixed;top:0;left:0;right:0;height:730px;background:url(/images/light.png) no-repeat calc(50% + 220px) 0;pointer-events:none;}
.first-screen__title{line-height:50px;font-size:40px;color:#ffffff;font-family:'Raleway Bold', sans-serif;margin:0;}
.first-screen__fixed{position:fixed;top:0;left:0;right:0;}
.first-screen__desc{line-height:40px;font-size:25px;color:#ffffff;margin-bottom:14px; margin-top: 0;}
.first-screen__content{margin:0 auto;padding-top:240px;max-width:960px;}
.first-screen__textures{position:fixed;z-index:101;top:0;left:0;right:0;height:730px;pointer-events:none;}
.first-screen__thunderrise{position:absolute;top:384px;left:calc(50% - 128px);left:-webkit-calc(50% - 128px);-moz-left:calc(50% - 128px);width:685px;}
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
	background:#ffffff;
}
.second-screen__content{padding:150px 0;}
.second-screen__hr{padding:75px 0;background:url(/images/main/dots.svg) repeat-x 50% 50%;text-align:center;}
.second-screen__hr p{display:inline-block;line-height:20px;background:#fff;font-size:13px;font-weight:600;color:#fff;letter-spacing:1px;text-transform:uppercase;margin-bottom:0;}
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
/* @media only screen and (max-width:449px){
.header__social-mobile-control{width:70px;height:60px;background-position-x:18px;}

.header_white .header__social-mobile-control{background-position-x:18px;}
.header__social-mobile-control{height: 60px;}
.header__menu_visible{padding-top:0px;}
.lafka svg{width: 100%;}
.header__social-mobile-control{width:70px;height:60px;background-position-x:18px;}
.header__social{top:60px;}
.header__social-link{padding:0 70px 0 20px;}
.header_white .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #fff;}
} */
a{text-decoration:none !important;}
body{line-height:20px;font-size:14px;font-family:'Work Sans', sans-serif;color:#000000;background-color:#ffffff;overflow-x:hidden;}
.container{max-width:990px;width:100%;}
div.siteWrapper{min-height:100%;}
.main{position:relative;z-index:101;}
.header{background: #151515;position:absolute;z-index:100;top:0;left:0;right:0;}
.header__content{margin:0 auto;width:960px;}
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
.headerWhite.header .header__menu .header__menu-link:hover:after{width:100%;background-color:#fff;}
.headerWhite.header .header__logo .tt2{position:static;display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;transform:none;}
.bg-video{position: absolute;top: 0;left:0;width: 100%;}
@media only screen and (-webkit-min-device-pixel-ratio:2){div.headerWhite a.link:hover:after{display:none;}}
div.blockTouch{background-color:#fff5de;box-shadow:inset 0 -1px 0 0 #151515;}
div.blockTouch div.content{margin:0 auto;padding:80px 0;max-width:960px;width: 100%;}
@media (max-width:991px){.main.wrapper3{overflow-x:hidden;}
.top-header{position:fixed;top:0;left:0;right:0;width:100%;}
.header{position:fixed;z-index:1000;}
.header_white{background:#ffffff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
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
.header__menu{position:fixed;z-index:101;top:0;left:0;right:0;height:0;padding-top:0;background:#fff;overflow:hidden;visibility:hidden;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
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
/**/.first-screen__light{background-position:50% 0;}
.first-screen__thunderrise{position:absolute;top:140px;left:50%;transform:translateX(-50%) !important;height:144px;width:500px;visibility:visible;transition-duration:2000ms;}
.first-screen__thunderrise_scale{transition-duration:2000ms;transform:translateX(-50%) scale(0.5) !important;}
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
.first-screen__thunderrise{top:120px;height:112px;}
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
    .first-screen__thunderrise{
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
.header_white .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #fff;}
.first-screen{height:560px;}
.first-screen__light{background-size:auto 50%;}
.first-screen__thunderrise{top:110px;height:76px; width: 380px;}
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
    .first-screen__thunderrise{
        width: 300px;
    }
}

@media (max-height:400px){.header__menu-link:first-child{margin-top:20px !important;}}
@media (max-height:400px) and (max-width:700px){.header_white .header__social-mobile-control_active{background:url(/images/social.svg) no-repeat 18px 50%, #fff !important;}


</style>

<?=$this->render("../blog/_styles");?>
	<!-- Load CSS Compilled without JS -->
	<noscript><link rel="stylesheet" href="/styles/home.css"></noscript>
    <!--<div id="preloader">
        <div class="load-per-sent">0%</div>
        <canvas id="canvas" width="160" height="160"></canvas>
        <div class="preloader-clouds"></div>
    </div>-->

<div class="header">
    <div class="header__content">
        <div class="header__logo">
            <a href="/" class="tt1">
                <img style="max-width: 43px;" src="/images/header/logo.png" alt="thunderrise-logo">
            </a>
            <a href="/" class="tt2">
                <img src="/images/header/logo2.svg" alt="thunderrise-logo">
            </a>
            <a href="/" class="tt3">
                <img src="/images/header/logo3.svg" alt="thunderrise-logo">
            </a>
        </div>
        <div class="header__menu-mobile-control"></div>
        <div class="header__menu" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
            <a itemprop="url" href="/services" class="header__menu-link"><span itemprop="name">Services</span></a>
            <a itemprop="url" href="/works" class="header__menu-link"><span itemprop="name">Works</span></a>
            <a itemprop="url" href="/blog" class="header__menu-link"><span itemprop="name">Blog</span></a>
            <a itemprop="url" href="/company" class="header__menu-link"><span itemprop="name">Company</span></a>
            <a itemprop="url" href="/contacts" class="header__menu-link"><span itemprop="name">Contacts</span></a>
        </div>
        <div class="header__social">
            <a href="https://clutch.co/profile/thunderrise" class="header__social-link">Clutch <img src="/images/header/clutch.svg" alt="clutch"></a>
            <!-- <a href="https://twitter.com/Thunder_rise" class="header__social-link">Twitter <img src="/images/header/twitter.svg" alt="twitter"></a> -->
            <a href="https://www.linkedin.com/company/thunderrise" class="header__social-link">Linkedin <img src="/images/header/linkedin.svg" alt="linkedin"></a>
            <a href="https://dribbble.com/Thunderrise" class="header__social-link">Dribbble <img src="/images/header/dribble.svg" alt="dribble"></a>
            <a href="https://github.com/thunderrise" class="header__social-link">GitHub <img src="/images/header/github.svg" alt="github"></a>
<!--            <a href="https://www.facebook.com/thunderrise" class="header__social-link">Facebook <img src="/images/header/facebook.svg" alt="facebook"></a>-->
        </div>
        <div  style="background-color: #151515;" class="clearfix"></div>
    </div>
</div>
<link href="//db.onlinewebfonts.com/c/2206d6cc490084998d531e8c1b2cbb4a?family=Druk+Wide+Bold" rel="stylesheet" type="text/css"/>
<section class="first-screen">
	<video style="display:none" class="bg-video" preload="metadata" autoplay="autoplay" playsinline loop="loop">
	    <source src="/videos/bg-thund.webm" type="video/webm">
	    <!--<source src="/videos/lafka.webm" type="video/webm">-->
	</video>
    <div class="container">
        <div class="row">
            <div class="first-screen1">
                <div style="display:none" class="first-screen__light"></div>
                <div class="first-screen__textures">
                    <img style="display:none" class="first-screen__thunderrise" src="/images/main/logo.png" alt="thunderrise">
                    <img class="first-screen__flash" src="/images/logo-b.png" alt="flash">
                </div>
                <div class="first-screen__fixed">
                    <div class="first-screen__content">
                    <div style="background-color:#6927FF; width:30%; height: 1px; margin-bottom: 15px"></div>
                        <h1 class="first-screen__title" style="font-family: Druk Wide Bold;letter-spacing: 0.1em;">Efficacy,<br> Transparency,<br> Secure</h1>
                        <div style="background-color:#6927FF; width:40%; height: 1px; margin-top: 15px"></div>
                        <!--<p class="first-screen__desc">Native iOS and Android apps</p>-->
                        <!-- <div class="button-sic__item">getit-btn
                            <a href="/contacts" class="button-sic__link">Request a free estimate</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="display:none" class="first-screen__clouds"></div>
</section>
<section class="second-screen">
    <div class="container">
        <div class="row">
            <div class="second-screen__content">
                <div class="second-screen__mass-media">
                    <img src="/images/tnw.svg" alt="tnw">
                    <img src="/images/vc.svg" alt="vc">
                    <img src="/images/tc.svg" alt="tc">
                </div>
                <div class="second-screen__hr"><p>They feature our clients</p></div>
                <div class="second-screen__logo"><img src="/images/main/logo.png" alt="thunderrise"></div>
                <p class="second-screen__title">ThunderRise</p>
                <div class="second-screen__arrow"></div>
                <div class="second-screen__deploy">
                    <p class="second-screen__desc">
                        We are a team of like-minded people who are united with the idea to do the best Web and Mobile products. If we are engaged in a contract with you, our dear customer — we believe in your idea, and we’re ready to work hard to get your project done in the best way for sure.
                    </p>
                    <p class="second-screen__desc second-screen__desc_hidden">
                        We will consult with you to go through the release process and get the best possible result. We understand that not all customers are experienced in IT development and companion processes, so we will do everything transparent and if we know a better solution for some parts of the remaining functionality or the whole project, we will inform you about all ideas and will able to help with the decision.
                    </p>
                    <div class="second-screen__read-wrapper">
                        <div class="second-screen__read">
                            <span>Read more</span>
                            <img src="/images/main/arrow.svg" alt="arrow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block block1 phones" data-target=".block1 .op-block">
	<div class="clip">
	    <div class="container">
	        <div class="row">
	        	<div class="fix-case">
	                <h3>Select Cases</h3>
	                <div class="arrow"></div>
	                <h2>We launch advanced commerce platforms</h2>
	                <div class="phone">
	                    <img class="lafka-shadow" src="/images/main/lafka-shadow.png" alt="lafka-shadow">
	                    <img class="phone-svg" src="/images/main/phone.svg" alt="phone">
	                    <video class="video1" preload="metadata" autoplay loop poster="/videos/lafka.png">
	                        <source src="/videos/lafka.webm" type="video/webm">
	                        <!-- <source src="/videos/lafka.webm" type="video/webm"> -->
	                    </video>
	                </div>
	            </div>
	            <div class="col-sm-6 op-block">
	               <p class="title">The fastest growing grocery delivery service in Russia</p>
	               <p class="desc">Lafka is a world wide trading venue for retail. A combination of innovational interface with an advanced logistics system.</p>
	           </div>
	           <div class="col-sm-6 op-block">
	               <div class="platform">
	                   <img src="/images/main/lafka-platform.svg" alt="lafka-platform">
	               </div>
	               <div class="lafka">
	                   <img src="/images/main/lafka-logo.svg" alt="lafka-logo">
	               </div>
	               <a href="/works/lafka" class="button">See full case<i class="arrow"></i></a>
	           </div>

	        </div>
	    </div>
    </div>
</section>
<section class="block block2 phones" data-target=".block2 .op-block">
	<div class="clip">
	    <div class="container">
	        <div class="row">
	        	<div class="fix-case">
	                <h3>Select Cases</h3>
	                <div class="arrow orange"></div>
	                <h2>We launch advanced commerce platforms</h2>
	                <div class="phone">
	                    <img class="phone-svg" src="/images/main/phone1.png" alt="phone">
	                    <video class="video1" preload="metadata" autoplay loop poster="/videos/melo.png">
							<source src="/videos/melo.webm" type="video/webm">
	                        <!-- <source src="/videos/lafka.webm" type="video/webm"> -->
	                    </video>
	                </div>
	            </div>
	           <div class="col-sm-6 col-sm-push-6 col-md-push-6 op-block">
		           <p class="title">Melo is a medium for joint real-time listening to music</p>
	               <p class="desc">Create your own audacious playlist and transmit your mood to your friends, relatives and collegues in real time!</p>
	           </div>
	           <div class="col-sm-6 col-sm-pull-6 col-md-pull-6 op-block tar">
	            	<div class="platform">
	                   <img src="/images/main/melo-platform.svg" alt="melo-platform">
	               </div>
	               <div class="lafka">
	                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="300" height="78" viewBox="0 0 300 78">
  						<image id="Melo" width="300" height="78" xlink:href="data:img/png;base64,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"/>
					</svg>
	               </div>
	               <a href="/works/melo" class="button">See full case<i class="arrow"></i></a>
	           </div>
	        </div>
	    </div>
    </div>
</section>
<section class="block block3 phones" data-target=".block3 .op-block">
	<div class="clip">
	    <div class="container">
	        <div class="row">
	        	<div class="fix-case">
	                <h3>Select Cases</h3>
	                <div class="arrow white"></div>
	                <h2>We launch advanced commerce platforms</h2>
	                <div class="phone">
	                    <img class="phone-svg" src="/images/main/phone1.png" alt="phone">
	                    <video class="video1" preload="metadata" autoplay loop poster="/videos/lcoin.png">
	                        <source src="/videos/lcoin.webm" type="video/webm">
	                        <!-- <source src="/videos/lafka.webm" type="video/webm"> -->
	                    </video>
	                </div>
	            </div>
	            <div class="col-sm-6 op-block">
	               <p class="title">Lcoin is a new cryptocurrency that facilitates purchases at retail</p>
	               <p class="desc">Lcoin is a cryptocurrency created in purpose of currency trading and service payment inside the most fast-growing company.</p>
	           </div>
	           <div class="col-sm-6 op-block">
	               <div class="platform">
	                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="128" height="59" viewBox="0 0 128 59">
				    	<image id="Shape_3_copy_4" data-name="Shape 3 copy 4" width="128" height="59" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAAA7CAQAAAAZOkr2AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfgDAcMHRkQqlkiAAAFEUlEQVRo3tWbbWwURRzGf3fXVptUogKtgpKiIqBYkWpLMaJibFCbgjVGQjCKUQtpjY2JpioktFjT8AE01qaSQEKMJvKmlreCvBkUQYORYLhqLW1UMCal0BYs9NqeH6697t7tbu9m/3vbPh8uMzv/fW6e52ZnZmfmPE0oYzYLyaONZ4yL71BnBuAP6+J3aGN9DDSl3EileXGSYu2yeY97AeiyqVMV6RRznJPDRM3iTbZYBXgVvtrD63w9IB/aXDLgbVqoJc0y5jo+ppmVViEqLaCKFzW5X10yoJtX2UM1K5hHDlO5lRtIJUAXHZzlNMc5TDXjeYJuKxpP3H1ACe/q8s9xxDjQ4T4AoJKlBE1/xCv4WE+VNUW8j0A25br8v/xgU6cqMtnKy/gs2vC1JFNCLePkDPBQhU935RN6XZE/j33MiSlyIfu5T8qAh8nS5ZvZ6Ir8fDaRBhwilxwOGcYMlaWzlVwzqvj6gDoKNbkABZwyD3asD7ibelIBuJ9zwHjDwVBf1kk+fxqRxdcCZmvSfRRbyXcMydQMyIeg5jMS+rIxfITHrgHjSA+nu3iJBhfkwxKmhtPVZJDBWsO4yLIHeNooLJ5HYDLfA9DPbio4O1y4I4+Aj2NMVCT8nUejW0s8E6F2dnCJRvYaP00JwRxl+XAnWdG9hZEBKcwli5voow0/x2gfuN5BcTgmmVxymMZYglyimaMctZ5xCSHf1t3zhzcgk1IKGKO50sePbGMnneErM1lMoS4GlnOVetbR6rABM23dnRd9SdsH+CjlDZINb+1mFwdpYwZFzDD9gh7WUEd/KONIH9AYYXx86GC6uQGp1PG4zToD7KSEgGMGiGNwGExig4h8KGCd8YirhAUcoIVvKRJVrWEd7ANW8IgYfRF72CXEVAPAFGrwsQU4Z5NxQiRrqAXk8YqY/F4q2C3EVWaSFmRNAjysFmu0AZaLyYfJmnSmM6xeIJ+7xMjfEpSP7tVbrl/RsXqBF8Sod/CFoPyEwMv1PCTEFRhu+WkkwsvciDUedXzp4juCDQNmiXG583ps24Dp9kkACHDYbTFqBtwixNTKFbfFqBkwVojpgttSVA1ItU8C4NLyuIABUhMMO6+prhrwnxBTpuBcLaEGXBRiSmOa22LUDPhbjOtJt8WoGdAqxrVErENNqAF+Ma4MwXf2EPo06aAyiyWrl18EK1xssWCqgjOadKszrF5OCp7ySWETkwQN+FCT/sAZVi+9okccbuYr7hFj284y/HTTSKn1UacY0RvN6mmCRSbbi6roYS119DiyLG5vUbQzeqj2AnuFp7EplFMvyjgE8e03L3CB/eIV/c4hAwJOGACfC7P2izM6hpABB2kRZf1GN9SMaIQM6KdWlFWWLQEGwGbBBc0j/ORYfS9L3z1oQIA1QlUM8r5j8mEl55XvPW90anhoe9zDdvPTdHGgnmWhhOPb4/o5wYSYSqIwdEosSDlXbcu/TIVtjoRCe0zuN4GdndX847YkdQNgg82tzQY+dVuQPQOCvMbPylx+ygTf2l0xALpZbDqIXeQUJ0ybeBOLNCfJRg2izwl28iyVPK9Z4w1ygnoOhGeLE3mKwog9xQbKRqN886Oy2SzlMa7Bzz6TXd9JLOBBbqOX03xmdGR9dAyD8f9lJmY4bsBfmo39oO4IrXlJFJLsVtNFnGFKON0aY0kUVP42N1JgvmIYx1qib5XbMkzRPlyAnyZuJ41mVrEtxpIo/A8zljd403bRsAAAAABJRU5ErkJggg=="/>
					</svg>
	               </div>
	               <div class="lafka">
	                   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="299" height="78" viewBox="0 0 299 78">
      					<image id="Rectangle_10" data-name="Rectangle 10" width="299" height="78" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAASsAAABOCAQAAADS4/hiAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfgDAcOIRr51KUJAAAPd0lEQVR42u2de3hU1bXAf2deSSZhMiFAIgaQhxJABQwIesUHVVquYkV68XmrokJFsILSl7e3tZ+01lqjWC1X7Kel2vJFVPD66dcq1Ku0gBqrpmpC5JkUCBDyIM95ZO4feZCZs8+ZfWbmzJnI/PiDzDr7dfasOXvvtdfaR6lGyFBmMIWRFJCNHXMI0kodB6hgO0e0Eo0zqfI0ZqII1Go6CylBSWIrQpRTxgeiS7Go1dYkNj2NCFvE51GU8gjTkqpUoDCNR3icUVZ3x1eW2bzMMQJU8xjDza8u/Gl1FctxWXjzPp7k9XBR+mkVN3aeZnG/zy3cyP+aW+XJp5XCXdxnqVKBi/u4O8lPyq8+vwxTKshhI+ebW+VJtVrGQqvvH4BvsdzqJnylmMC9KpmL35hbqaPn/3lcG2sRIZsvK5AVdHY5AZSgLWgLONpd7UpXjAXOZz+bzb3tU4hvC1fy05nI5+ZV2q1Wo7jbeNags93bkefzBrKEw1bI0e5qzmhwH7f7DRe9lE/YZ95Nn1JM1ZSbrlb3kmEkU5e9dUhroc+rOwtSAu6Au62wIeRqzD6cfcwWNFCBixV817ybPqXQmi1nmlmpA5jGFPkMAVdzUevpIXkTqeLL8+U1BrP/5al1+KRzncsMdpp546cMe7lMKN9jZqU24HrZxF2O+nGHZraMNKBUPYTsLSMPzawfF3RKZ0mNBcTAZ5NQepRtZlbqYBjnySU9UdA0tisOA0TI1lrUXuDZ7TkslXwqw7S3dCQo4ZtMYTjZNLGHnbzEwcR12wDidbZzgUr6IMZnvAZQquexMnqyoPNYcWd+YqrMqB9SKTWNL+W1mM2hbzA3QujnftYk5g4GGEW8y+gwyfMsImRmlTbOjZ6ow3O4JFFKBZ35h0s6PBIJJVqmyVyVxMmcRN3BAKOW6aylo+dTDXeYrVTg4IxoSU4UNIxX7R3GRTDzyJS8qkF1UZKNliosTXTquYv7mYGXvXxstkoBOCjQT9BU1GSGb4qtYUKXM7dWN81Q82//FKI1mVulNrL0LpukVN1lj2ss0k2Qk7xuSJNYbH3bNwJOFJinVADN407oPSvTW84DFp05U4enYbzZ1TeM78i1ugvSJB5NtQo66ycmdqIurr9+ggETaZoBguYQeKw4GHXX6AxGo9BFNf+KuQHBzGPFBRVWd8MpgIKXDFpoSUZlGmp1olDGTjUMBbBREIdaQWd+c6Gk5T1VseMhl05OmPClDWU8Q8nBRwsHqaLNcAlDWMI8JvdsLh9hB3/gZaGZIZNrmcNYoI5yXmaXIE0uX2c6xeQCjVTxd7bSFJlIqFZBZ9PYhHePDs1js+tjcJ+xnjOZy6VMYkxfPzawi528zZYYvv5wBnEt32A2w8KkIT5nC5t5B3lvts/DTDXDuJqreZwVqnT/weP9/NwXsJoy7qa+X4rJfJ8FYT4R84B2yniYyv5FCWdPjaO6kjrf6XI2DrTgCBd38iG7eIL5nNXvx5nHDO7hNepYxzkxl34mv6OO57k+QqlAYRL3sIW93C9tgBHZ/4apJN+jLCJ4QuE6dtBrBMphLR9xg8DRJotbqKC0v6uNQK0CGW1JiM0Ip214wJDHl6Uo3M5unqFEJ00Od/AJG2PYKfDyW75gkb49kZH8ir0sSpgRZhYPC+XjKMMGjOUDlugs4Rzcyw5G9H4UJGwaETJ/BRhByNY0Iv5SksJo3uNZiiRSKizgM+419NXPoZLvSAb8DuF3bCUx/bZas5UXsIBxvEdx1DIms623X1QK1GVvOy0hDTVI22ldZkVPJ5J5fMS/GUifRSmbGSSZ+gHejLaZFsGllAvcXoxSwEU6V1fwJnI6MZK/dA/NKrVqKTDupJcIQvYWYx1qBYt5Fa/hXPN4T2J/U2END8VgKRzK23w9zvsap/tEvcCAd9KEbucj1W20Wfbltg2LvwxTWcLaGM+jmMwWou0m/DzmQDY3rzAjrjvzxt03J7mVC1VqFXT5ZDyhTMGXG7Q2+FWfuTwVxwT5HF5Bb3V9Oz+Io21u3kiZgwYUfqpSq7bB0bvOQR6DGczgvp+us+ez+l+e3k62qkFtg63uE02KWB/nyTmzeUjz2qS4/VYHs4F4jEIH+G9u5AldX6wAz3E5wxlEMXfohINdzpiIb73TG70F56kMJtk6oTsdbJf2G+v0DkpVa/s6huhc9bGHZlwU6aZaxWb+LpArPItbM5efD/knx7ExkvM4UzPdTO7h1zHeXSWTaAH+xFBu1EizmwV80vN3FVU8x/c15oIK8yPUSmYINOYGlYmdgGRa6wbgKFzDNzSu+CnjJd7qs6mP5hqWakxxFZ7mPIF1/DZmapR+gEd4kcZ+kmKWcadG7N9PeJHYfpa7+/56X0OtapnFoTBJF7+gWSPo/uIwbQspAX0jXHcqg22WTx/ICqWij5VNw1QIW5jIzWzut1Gzl1ImcBcnhOknc51K5uBHwrQhSinmqTClgkqWcTY7hDkGCTZkjKIVyXlbhFJ18xSvClNPClMrf5bMpPQgfgIECPQpTKjns/qfn8MYCGdW/BJqnXSuRux39ghz+FIgD7CWCzggzLNKJZmPaP81yM2spF1YRjWXsFF4ZSnmPO938LbGldVCaUHYIOjXHuH7UUVVz1/n9wyITXyUoPb7s1zxbtEmnu8IpQ/zQ508n3EZOwTWqqmcz/thkluF+e/hjzql+7gJL5er5Dks5FkTemCT5pVyagR2/pywp5X1DnUpaGLI52sC6V/5ryj59nCzcPwPHwbzhGFmZTwdpXQfN4X5FvSywJQ+qDZ6LexplVy/BRHWt0DFHIGNpIsVEmP7X5jOFUyikDwAjnGYCt4MS3OxoPRO7pNo1xF+xhMq6SycJsQr60WXCwdqA2alXlzk9kzBHH0SbQN5c1/c4wDlQoGsrG+prU855VFSiPbiyqhFhnWsFtp6PpDKbSoxqFWJymfDzdmaqf1sS0a8o3mIbu35hJUu8gvYJJm3nT8LBr3iVFCrsLmVIrVoM7ZYcxoyTsu1IKmoDZB+3jWxdDRXXWq2SJaYdMLUSu5oM/PsVrItSCpqn/59Ggv/WFC7zDTRLJ27RiBLCZNy2CBokzKH76OgZ26V0aOVXXRqpj5mxG4l2YIk4hScWhfP8UiRZKskRuzkorQp4WUbplZOKZvRXvb2/NVrt2pOmN1KrgVJRLSqSuRqtUPlMJNtILfIzpgSP8ywQdDZbvHsOuRM3PCSKNTbMIn09FeXXmjgbHyRM0yTdG4TCZ+yhxyWfq2OdiX1Fo3qvbAig47BeuxVSRzMks59qUB2QDq3iUQ4Njjlp4sm4LK0dg1EIZhXmlr6NyXz2rhKIP0iCX0i0bQwMhutbEyGpbVr8A+BbJkhP9FBjGAMpwtnTSJfhJslQyq+JbBC+xI2zY2LCLVyH7dwdhVyH7e4N0S8I5BNlTod2sFqPqCVZg6wm1paaOJv3BKWZqugv/P4sUTpmUJv0/dptbrDQKVWdp91A5GryS5/bnvy2MYxgfQxiUjBH/MjpoWt1jxcSLhj9UHh82qlwDshkjVCw+fLlvZVH6rNG3edz/CJU+6osYkhjhLtUeROpD0ocfgoY6lKWsgrfE3DWa+bm4TPnAAvRUjWC+L87GzkCt1NmJ9wp7D0P1ndXd2ofJFz6oxvoLgYHuXf6Tq7ht0owZxoR9RaxTrhxGA62xmjdTMs5/fC+dcm1TbyH4RPw1y28p8apefwDD8VXnmBFOlDlVrZgu5DsRQUjWh72u5DKbhx083Hka/O7GES5SwXWLXP5U3WCLdCQwJvylZKhaXnsJ53VRHUGSxhl/BJBQF+aXVX9SL4tnNr2oYn+xQGpSu3Jv5SonClgeVISdiKahVzhJsiXtbwAC+xhUqOks1wZnANl2iuE1/gY4H0cRZrRPnNYhuVvN0v8mYO2kFvT4YfBmQlArVydLoPtsocXcERsqVX2vpPZ/dBR6dkQclhVphaVfErTW/QApaxTKrMeu4Xytu4kz9rdmSxxKEaAPs1BkZLEI5N3v3tBTJ+mvsS9NI/m9+73+qOiCBylfUgs4UOffKEuE1zk/otHhUETxjBx00GPB9MRzjY2f2e3UYLigfP7pQ7iy/yhJQA10n6bGrxoO5rt3/Ia3GUHWIRf0tW18igMYfyHM6oN1ZQ7GTUp+DJoeqZVC3/Tux9spaf6V4PcoMB971wQqzgxWR2TnQ0p+ZDKu1JcUK3dwxJmYlmP0Sh2xVcRGyD9aMsjbpcaONKNsRQtp9bBaESFqOpVnZ//hcGjj2Nla78L1JuAAQ0TiyuZCZ/NVhSG4tYJbUG9XEjKw3GzRzgMtZb00V66BgSMpvyquQLio28qsyU8A9SobWzdpgrWGXgmOxtTOM56dQhSimRniUFWMM5qTWn6sWm5004qC73S/mijOP5Uvflb1b6XmkfNB/kUSbyDNH3Lyu5gYsNO6pUMIv5fBgllZ/1nMt3U2n11x+bvrt/bq3HNMXyfOnVX1sl5X0HGujP92pYwmh+wGeaLd/I1UxiQ0w/jRCbmM40HhOqZCf/x0qKuEVaYZ9QhRrUak7x9wl+Lg263vv7RP2jVK+LdjLkicKGsxL+9puuvF1Rz7Law+0xv1Q32q89Ggsl37w+iouYRDG55BKgkRp2sZOdJMq4W8jZnEU+2UADh6iiIoYXCQxmLlMZShZN7Gc77+jErYzh21zCeLwEOc5nvMULHNUt/XKup4SReGihnk95gw1K9QPRnTA6PPUTo78BRx57R/7nmdEf31t4KGa1SmMpDj6NrlaZzYXlFrwC/NNYa5idsO5JExsOdhKKvrFn9xdUNBc2j4336A2b37Nb0vgZ0jgcLM0AwMERPtJ9zUYfnsPZ9Y1ntJ0Wq3eD0uU+5N0nbaX6R0LDPNMkFQewQU6twO7Pr87d3zyidbjRVwIoweyDnhqHEafiMqu7Jk3sOIAP+VjnqOLIDL7Bu737Woe2Fvi8Ul4xIVdjdl32UYNOep+y0+quSRM7SjXAKP7HeOx+0NXu7fD6vAHxiaMhR7uzObMx67ihZ1Q3Ppb02kNMfQd5GpNQes7ou0rqBDghIcWf5c8KOkP2kB2UoBK0+53tzngilEtPuomk1Wog0uvG9zqjuTa2IpSQqy2hB8m+GpfvUZoU4OSq7jcpMkneyJNWNyFNvJx0Og7xW2pYbuC8ksTj40mNKJc0A4pwG9TrLBbGhiSHT1icVqqvBorgWO3pLKQkYW8BliFEOWXiKN70lH0gomic5D6UGUxhJAW4YzkNWYoAbdRxgAq2a1vU02o1EPl/5Y7o/pu2sdoAAAAASUVORK5CYII="/>
    				</svg>
	               </div>
	               <a href="/works/lcoin" class="button">See full case<i class="arrow"></i></a>
	           </div>

	        </div>
	    </div>
    </div>
</section>
<!--<section class="block red">
    <div class="container">
        <div class="row">
            <h3>Prices</h3>
            <div class="arrow"></div>
            <h2>Always a smartter path</h2>
            <img src="/images/main/price-shadow.png" class="shadow" alt="shadow">
            <div class="white-block clearfix">
                <div class="col-md-4 startap clearfix">
                    <div class="stap">
                        <img src="/images/main/price1.svg" alt="price1">
                    </div>
                    <h4 class="title">Small size apps</h4>
                    <p class="desc">Released product in the minimum term</p>
                   
                </div>
                <div class="col-md-4 startap clearfix">
                    <div class="stap">
                        <img src="/images/main/price2.svg" alt="price2">
                    </div>
                    <h4 class="title">Medium size projects</h4>
                    <p class="desc">Projects with expanded functionality</p>
                   
                </div>
                <div class="col-md-4 startap clearfix">
                    <div class="stap">
                        <img src="/images/main/price3.svg" alt="price3">
                    </div>
                    <h4 class="title">Long term projects</h4>
                    <p class="desc">Projects of high complexity & Start-ups support</p>
                    
                </div>
            </div>
        </div>
        <div class="buttonSicWrapper center">
            <div class="buttonSic w280">
                <a href="/contacts">Get more info</a>
            </div>
        </div>
    </div>
</section>
<section class="main wrapper2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-pad">
                <h3>Our Services</h3>
                <div class="arrow"></div>
                <h2>We launch advanced commerce platforms</h2>
            </div>
            <div class="developments">
             <div class="col-md-4 col-sm-12 text-center item">
                <div class="outer-img"><img src="/images/services/web.svg" alt="websites"></div>
                <h2><a href="/web-development" class="name">Web Development</a></h2>
                <p>Websites have become an integral part of business and stand for universal and convenient way to interact with your customers and acquire new ones. Our polished website will be a pleasant and beneficial addition to your business.
                </p>
                <a href="/web-development" class="info">More info<i class="arrow-right"></i></a>
             </div>
             <div class="col-md-4 col-sm-12 text-center item">
                <div class="outer-img"><img src="/images/services/mobile.svg" alt="mobile"></div>
                <h2><a href="/mobile-development" class="name">Mobile Development</a></h2>
                <p>Our team consists of high profile mobile developers that specialize on custom solutions for iOS and
                    Android platforms. We satisfy and overcome your expectations when deliver outstanding apps with high quality standards.
                </p>
                <a href="/mobile-development" class="info">More info<i class="arrow-right"></i></a>
             </div>
             <div class="col-md-4 col-sm-12 text-center item">
                <div class="outer-img"><img src="/images/services/outstaff.svg" alt="outstaff"></div>
                <h2><a href="/outsourcing-service" class="name">Outsourcing</a></h2>
                <p>Thunderrise provides IT-outstaffing services of high quality and assures that even most challenging
                    and complicated projects will be developed in strict accordance with your requirements and within
                    the agreed deadlines.
                </p>
                <a href="/outsourcing-service" class="info">More info<i class="arrow-right"></i></a>
             </div>
         </div>
        </div>
    </div>
</section>
<section class="main wrapper3">
    <div class="container">
        <div class="row">
            <h3>What's special about us?</h3>
            <div class="arrow"></div>
            <h2>We launch advanced commerce platforms</h2>
        </div>
    </div>
    <div class="content">
        <div class="round">
                <img src="/images/main/w3.circle.small.svg" class="r1 r1-max" alt="circle">
                <img src="/images/main/w3.circle.big.svg" class="r2 r2-max" alt="circle">
                <img src="/images/main/w3.circle.small-min.svg" class="r1 r1-min" alt="circle">
                <img src="/images/main/w3.circle.big-min.svg" class="r2 r2-min" alt="circle">

                <div class="analysis">
                    <img src="/images/main/analysis.svg" class="increase" alt="analysis">
                    <div class="item">
                        <p class="title">Analysis</p>
                        <p class="desc">Detailed research of the market and trends to find the best approach to your project</p>
                    </div>
                </div>
                <div class="design">
                    <img src="/images/main/design.svg" class="increase" alt="design">
                    <div class="item">
                        <p class="title">Design</p>
                        <p class="desc">Design creation regarding top demands and hottest features</p>
                    </div>
                </div>
                <div class="development">
                    <img src="/images/main/development.svg" class="increase" alt="development">
                    <div class="item">
                        <p class="title">Development</p>
                        <p class="desc">Functionality development in accordance with design applying our diverse scope of knowledge</p>
                    </div>
                </div>
                <div class="product">
                    <img src="/images/main/product.svg" class="increase" alt="product">
                    <div class="item">
                        <p class="title">Product</p>
                        <p class="desc">Delivery of the ready to release product that overcomes your expectations</p>
                    </div>
                </div>
            </div>
        </div>
</section>-->

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