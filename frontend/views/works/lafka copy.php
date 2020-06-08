<?php
$description = 'Innovative start up in the niche of retail that we provide full cycle of development.';
$this->title = ucfirst("lab3m project - Lafka. Future is today.");
$this->registerMetaTag([
    'name' => 'description',
    'content' => $description,
]);
$this->registerMetaTag([
    'property' => 'og:description',
    'content' => 'Lafka is a world wide trading venue for retail. And as for now Lafka is the fastest growing grocery delivery service in Russia'
]);
?>
<style>
body .container{max-width: 990px;width: 100%;}

.main{position: relative;}
.main .arrow {margin: 12px 0;height: 10px;background: url(../images/arrow/white.svg) no-repeat 50% 50%;}
.main1{background-color: #151515;margin-top: 70px;text-align: center;height: 1109px;overflow: hidden;}
.main1 .top-img{position: absolute;bottom: -122px;left:50%;transform: translate(-50%);}
.main1 h1{font:70px 'Raleway Bold', sans-serif;margin-top: 80px;}
.main1 h2{color: #665900;font:27px/40px 'Montserrat', sans-serif;margin: 13px 0 59px;}
.main1 p{text-align: center;max-width: 760px;margin: 0 auto;font:18px/36px 'Montserrat', sans-serif;color: #665900;}
.main1 .video{position: absolute;bottom: -22px;left: 50%;width: 294px;transform: translateX(-17px);}
.main2{padding: 140px 0 176px;text-align: center;}
.main2 h2{font:42px 'Montserrat', sans-serif;color: #fff;margin: 40px 0 19px;}
.main2 h4{font:13px 'Montserrat', sans-serif;color: #fff;margin: 18px 0 67px 6px;letter-spacing: 1.9px;}
.main2 .cont-wrap{text-align: left;}
.main2 .cont-wrap *{font:18px/36px 'Montserrat', sans-serif;color: #fff;margin: 0;}
.main2 .cont-wrap ul{padding: 0;list-style-position: inside;}
.main8 ul{padding: 0;list-style-position: inside;}
.main8 ul {text-align:left!important;    font: 18px/36px 'Montserrat', sans-serif;color: #fff;}

.main .arrow-ginger{background: url(/images/arrow/orange.svg) no-repeat 50% 50%;}
.main .arrow-yellow{background: url(/images/arrow/yellow.svg) no-repeat 50% 50%;}

@media only screen and (max-width: 767px){.main1{height: auto;padding: 0 0 100px;}
.main1 .top-img,.main1 .video{display: none;}}
@media only screen and (max-width:449px){.header__content:after{left:20px;right:20px;}


</style>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?>

<section class="main main1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 style="color:#fff">Trade3M</h1>
                <div class="arrow arrow-yellow"></div>
                <h2 style="color:#fff">All in one enterprise portfolio management, custody and trading features</h2>
                <p style="color:#fff">Trade3M is a food shopping & delivery service,  that represents a smart search and assortment selection system. It’s a personal assistant for daily life that simplifies shopping groceries and saves your time and money. Lafka app combines excellent product quality, high delivery speed and unblemished reputation of leading hypermarkets presented in the app.</p>
            </div>
        </div>
    </div>
    <img class="top-img" data-src="/images/cases/top-img.png" alt="Lafka gadget">
    <video class="video" preload="metadata" autoplay="autoplay" playsinline loop="loop" poster="">
        <source src="/videos/lafka.mp4" type='video/mp4;'>
    </video>
</section>
<section class="main main2" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Product Details</h2>
                <div class="arrow"></div>
                <h4>We launch advanced commerce platforms</h4>
                <div class="cont-wrap">
                    <p>Lafka is a world wide trading venue for retail. And as for now Lafka is the fastest growing groceries delivery service in Russia.</p>
                    <ul>
                        <li>The search with voice recognition system integrated to it</li>
                        <li>The intellectual system of order recognition </li>
                        <li>The bot interface that gathers the shopping  list by the means of various Messanges</li>
                    </ul>
                    <p>That’s why Lafka is a combination of innovational interface with the advanced logistics system.</p>
                    <p>The model when the service or commodity is delivered here and now has proven itself to be successful in foodtech and is adaptable to almost any niche. The groceries delivery is only the beginning, Lafka startup is going to embrace the whole retail market.</p><br><br>
                    <p>Lafka is a startup company whom we have developed software complex on turnkey basis:</p>
                    <ul>
                        <li>Users app: 2 native mobile clients for iOS and Android</li>
                        <li>Shoppers app: 2 native mobile clients for iOS and Android</li>
                        <li>Backed with several data flows and real time synchronization</li>
                    </ul><br>
                    <p>Lafka. Future is today.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section class="main main3">
    <div class="container">
        <div class="row">
            <div class="scr">
                <img data-src="/images/cases/phones1.png" alt="Display for lafka">
                <img data-src="/images/cases/phones2.png" alt="Display for lafka">
                <img data-src="/images/cases/phones3.png" alt="Display for lafka">
                <img data-src="/images/cases/phones1.png" alt="Display for lafka">
                <img data-src="/images/cases/phones2.png" alt="Display for lafka">
                <img data-src="/images/cases/phones3.png" alt="Display for lafka">
                <img data-src="/images/cases/phones1.png" alt="Display for lafka">
                <img data-src="/images/cases/phones2.png" alt="Display for lafka">
                <img data-src="/images/cases/phones3.png" alt="Display for lafka">
            </div>
        </div>
    </div>
</section>-->
<!--<section class="main main4">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/shelm.svg" alt="shelm">
                </div>
                <p class="title">Our Team</p>
                <p class="sign">12 Engineers</p>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/pin.svg" alt="pin">
                </div>
                <p class="title">Client's Location</p>
                <p class="sign">Moscow, Russia</p>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/stopwatch.svg" alt="stopwatch">
                </div>
                <p class="title">Timeline</p>
                <p class="sign">February 2016 - 2016 December</p>
            </div>
        </div>
    </div>
</section>-->
<!--<section class="main main5">
    <div class="container">
        <div class="row">
            <h2>Involvement</h2>
            <div class="arrow"></div>
            <h4>We develop native iOS and Android apps</h4>
            <div class="col3">
                <div class="img">
                    <img data-src="/images/cases/frontend.svg" alt="frontend">
                </div>
                <p class="title">Front-End</p>
            </div>
            <div class="col3">
                <div class="img">
                    <img data-src="/images/cases/backend.svg" alt="backend">
                </div>
                <p class="title">Back-End</p>
            </div>
            <div class="col3">
                <div class="img">
                    <img data-src="/images/cases/interaction_design.svg" alt="design">
                </div>
                <p class="title">Interaction Design</p>
            </div>
            <div class="col3">
                <div class="img">
                    <img data-src="/images/cases/graphical_design.svg" alt="graphic">
                </div>
                <p class="title">Graphical Design</p>
            </div>
            <div class="col3">
                <div class="img">
                    <img data-src="/images/cases/support.svg" alt="support">
                </div>
                <p class="title">Support</p>
            </div>
        </div>
    </div>
</section>-->
<!--<section class="main main6">
    <div class="container">
        <div class="row">
            <h2>Main Features</h2>
            <div class="arrow arrow-ginger"></div>
            <h4>We launch advanced commerce platforms</h4>
            <div class="col-sm-3">
                <div class="img">
                    <img data-src="/images/cases/Reagent.svg" alt="Reagent">
                </div>
                <p class="title">Simple</p>
                <span>Tell or write your groceries list</span>
            </div>
            <div class="col-sm-3">
                <div class="img">
                    <img data-src="/images/cases/Cloock.svg" alt="Cloock">
                </div>
                <p class="title">Fast</p>
                <span>Form your order in 2 minutes</span>
            </div>
            <div class="col-sm-3">
                <div class="img">
                    <img data-src="/images/cases/Car.svg" alt="Car">
                </div>
                <p class="title">Delivery</p>
                <span>Quality foods from Supermarket within an hour</span>
            </div>
            <div class="col-sm-3">
                <div class="img">
                    <img data-src="/images/cases/Shield.svg" alt="Shield">
                </div>
                <p class="title">Warranties</p>
                <span>Payment after delivery of your order</span>
            </div>
        </div>
    </div>
</section>-->
<section class="main main7" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="img">
                    <img data-src="/images/cases/phone1.png" alt="phone1">
                </div>
                <h2>Client</h2>
                <ul>
                    <li>Smart-system of commodities search and selection consists of variety of useful filters that makes deciding process fast and comfortable.<!--  Also it’s enabled to perceive vocal requests, so a customer can just name the products he wishes to buy --></li>
                    <li>Chat with delivery service and private operators allows to control ongoing  processes</li>
                    <!-- <li>Order status notification system instantaneously informs customer about any changes happened during shopping and delivery process</li> -->
                    <li>Clients info is saved on servers, this allows instantaneous renewal of past orders if necessary</li>
                    <li>Analysis of previous customer’s orders enables system to form a list of recommended commodities for specific customer</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="img">
                    <img data-src="/images/cases/phone2.png" alt="phone1">
                </div>
                <h2>Shopper</h2>
                <ul>
                    <li>Order lists screen to pick an order to work on;</li>
                    <li>Schedule changing option to arrange dates when you can work;</li>
                    <li>Availability status to notify administrator you are ready to shop;</li>
                    <li>Online chat with the customer including history and the main info;</li>
                    <li>Editing shopping list to check the product in stock and to replace if some isn’t.</li>
                </ul>
            </div>
        </div>
        <div class="oval">
            <img data-src="/images/cases/oval.png" alt="oval thunderris">
        </div>
        <div class="row shopper">
            <div class="col-sm-12">
                <h2>Shopper</h2>
                <p>Shopper is a client for shopping operators that accomplish shopping process. Through the app operator gets a buying list of products to acquire and instructions from customer himself on what to do in situations when a product on the list isn’t at hand.</p>
                <img data-src="/images/cases/MacBookLafka.png" alt="MacBook Lafka">
            </div>
        </div>
    </div>
</section>
<section class="main main8" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Back-End</h2>
                <div class="arrow arrow-ginger"></div>
                <h4>We launch advanced commerce platforms</h4>
                <p>Server part was developed with a view to the feature of flexible scaling and includes: authorization server, chat, server for file storageand other.</p>
				<p>For system management the administrative control panel was created. It includes:</p>
				<ul>
					<li>financial modul</li>
					<li>integration with payment system</li>
					<li>complicated catalog that allows to sort products using filters, tags and other</li>
					<li>smart system of catalog archivation</li>
					<li>product import and export</li>
				</ul>
            </div>
        </div>
    </div>
</section>
<section class="main main9" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img data-src="/images/cases/lafka-basket.png" alt="Lafka Basket">
                <p>Lafka is an intuitive smart search system that learns to foresee customer’s wishes for specified products purchasing and provides fast delivery service within an hour. It’s a great actual and eagerly sought service and a project that we are proud to develop, maintain and continuously improve.</p>
            </div>
        </div>
    </div>
</section>
<section class="main main10" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2>Inspiration</h2>
            <div class="arrow arrow-ginger"></div>
            <h4>We launch advanced commerce platforms</h4>
            </div>
            
            <div class="col-sm-4 pr1">
                <div class="img">
                    <img data-src="/images/cases/Basket.svg" alt="Basket">
                </div>
                <p>Basket</p>
            </div>
            <div class="col-sm-4 pr2">
                <div class="img">
                    <img data-src="/images/cases/Smile.svg" alt="Smile">
                </div>
                <p>Happy face</p>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/Lafka-smile.svg" alt="Lafka-smile">
                </div>
                <p>Lafka</p>
            </div>
        </div>
    </div>
</section>
<section class="main main11"  style="background: #151515;">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <h2>Iconography</h2>
            <div class="arrow"></div>
            <h4>We launch advanced commerce platforms</h4>
            </div>
            
        </div>
        <div class="col5"><img data-src="/images/cases/Basket.svg" alt="Basket"></div>
        <div class="col5"><img data-src="/images/cases/Bread.svg" alt="Bread"></div>
        <div class="col5"><img data-src="/images/cases/Purse.svg" alt="Purse"></div>
        <div class="col5"><img data-src="/images/cases/Meat.svg" alt="Meat"></div>
        <div class="col5"><img data-src="/images/cases/Shield.svg" alt="Shield"></div>
        <div class="col5"><img data-src="/images/cases/Reagent.svg" alt="Reagent"></div>
        <div class="col5"><img data-src="/images/cases/Car.svg" alt="Car"></div>
        <div class="col5"><img data-src="/images/cases/Apple.svg" alt="Apple"></div>
        <div class="col5"><img data-src="/images/cases/Glass.svg" alt="Glass"></div>
        <div class="col5"><img data-src="/images/cases/Cloock.svg" alt="Cloock"></div>
    </div>
</section>
<section class="main main12" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2>Technologies</h2>
            <div class="arrow arrow-ginger"></div>
            <h4>We launch advanced commerce platforms</h4>
            </div>
            
            <div class="option">
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/js.png" alt="javascript">
                    </div>
                    <p class="title">JavaScript</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/php.png" alt="php">
                    </div>
                    <p class="title">PHP</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/jq.png" alt="jquery">
                    </div>
                    <p class="title">jQuery</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/postgre.png" alt="postgre">
                    </div>
                    <p class="title">PostgreSQL</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/html.png" alt="html">
                    </div>
                    <p class="title">HTML5</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/redis.png" alt="redis">
                    </div>
                    <p class="title">Redis</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/cocoa.png" alt="cocoa">
                    </div>
                    <p class="title">ReactiveCocoa</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/lite.png" alt="sqlite">
                    </div>
                    <p class="title">SQLite</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/yandex.png" alt="yandex">
                    </div>
                    <p class="title">YandexSpeechKit</p>
                </div>
                <div class="item">
                    <div class="img">
                        <img data-src="/images/tehnologies/afn.png" alt="afn">
                    </div>
                    <p class="title">AFNetworking</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section class="main main13">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="link">
                    <div class="item">
                        <h2>Melo</h2>
                        <a href="/works/melo" class="items">
                            <img data-src="/images/works/melo0.png" alt="melo">
                            <div class="overlay">
                                <p class="title">Melo</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <h2>Lcoin</h2>
                        <a href="/works/lcoin" class="items">
                            <img data-src="/images/works/lcoin.jpg" alt="lcoin">
                            <div class="overlay">
                                <p class="title">Lcoin</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/styles/lafka.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/mCustomScrollbar.min.js", "async" : false},
    {"src" : "/scripts/customScroll.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
