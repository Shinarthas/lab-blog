<?php
$this->title = ucfirst("lab3m project - Lcoin. Lcoin - future of cryptocurrencies!");

/*$this->registerJsFile('/scripts/jquery-1.12.4.min.js');
$this->registerJsFile('/scripts/mCustomScrollbar.min.js');*/

/*$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/mCustomScrollbar.css");*/
/*$this->registerCssFile("/styles/app.min.css");*/

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Lcoin, We develop native iOS and Android apps, TennisHub’s SaaS solution helps tennis businesses streamline operations and drive paid on-court activities'
]);
?>
<style>
body .container{max-width: 990px;width: 100%;}
.main{
    position: relative;
    z-index: 101;
}
.main .arrow{
    margin: 12px 0;
    height: 10px;
    background: url(../images/arrow/white.svg) no-repeat 50% 50%;
}
.main .grey{
    background: url(../images/arrow/grey.png) no-repeat 50% 50%;
}
.main .top-border{
    border-top: 1px solid #c8b4a5;
    margin: 70px 0;
}
.main1{
    background-color: #1d1d1d;
    text-align: center;
    height: 1109px;
    overflow: hidden;
    /* border-bottom: 1px solid #000; */
}

.main1::before{
    content: "";
    background: linear-gradient(360deg, #000, transparent);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 1109px;
    z-index: 1;
}

.video_taxi{
    height:130%;
    position: absolute;
    top: 0;
    left: 0;
    min-width: 100%;

}

.main1 h1{
    font: 70px 'Raleway Bold', sans-serif;
    margin-top: 80px;
    color: #fff;
}
.main1 h2{
    color: #665900;
    font: 27px/40px 'Work Sans', sans-serif;
    margin: 13px 0 59px;
    color: #fff;
}
.main1 p{
    text-align: center;
    max-width: 760px;
    margin: 0 auto;
    font: 18px/36px 'Work Sans', sans-serif;
    color: #fff;
    position: absolute;
    left: 50%;
    margin-left: -373px;
    z-index: 1;
}
.main1 .top-img{
    position: absolute;
    bottom: -80px;
    left: 50%;
    transform: translate(-50%);
    z-index: 1;
}
.main1 .video{position: absolute;bottom: 3px;left: 50%;width: 296px;transform: translateX(-141px);}
.main2{
    text-align: center;
    padding: 50px 0;
}
.main2 h2{
    font: 42px 'Work Sans', sans-serif;
    color: #fff;
    margin: 40px 0 19px;
}
.main2 h4{
    font: 13px 'Work Sans', sans-serif;
    color: #fff;
    margin: 18px 0 67px 6px;
    letter-spacing: 1.9px;
    text-transform: uppercase;
}
.main2 ul{
    padding: 0;
    list-style-position: inside;
    margin-bottom: 0;
}
.main2 ul li, .main2 p{
    font: 18px/36px 'Work Sans', sans-serif;
    color: #fff;
    text-align: left;
}
.main2 b{
    font-family: 'Raleway Bold', sans-serif;
}

@media (max-width: 1662px){
    .video_taxi{
        left: -7%;
    }
}

@media (max-width: 1440px){
    .video_taxi{
        left: -16%;
    }
}

@media (max-width: 1368px){
    .video_taxi{
        left: -38%;
    }
}

@media (max-width:991px){
.top-header{position:fixed;top:0;left:0;right:0;width:100%;}

    .video_taxi{
        left: -53%;
    }

}
@media only screen and (max-width:767px){
    .main1{
        height: auto;
        padding: 0 0 100px;
    }
    .main1 .top-img,
    .main1 .video{
        display: none;
    }

    .video_taxi{
        left: -12%;
    }

    .main1 p{
        left: 0;
        margin: 0;
    }
}

@media (max-width: 620px){
    .video_taxi{
        left: -38%;
    }
}

@media (max-width: 550px){
    .video_taxi{
       
    }
}

@media only screen and (max-width: 449px){

    .main1 h1{
        font-size: 48px;
    }
    .main1 h2{
        font-size: 22px;
    }
}

@media (max-width: 320px){
    .video_taxi{
       left: -142%;
    }
}
</style>
<!-- <?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?> -->
<section class="main main1" style="overflow: hidden;">

<!-- <video src="/videos/D40_29_093_comp.mp4" autoplay loop class="video_taxi"></video> -->

   <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1><?= Yii::t('app', 'dex_name') ?></h1>
                <div class="arrow grey"></div>
                <h2><?= Yii::t('app', 'dex_des') ?></h2>
                <p><?= Yii::t('app', 'dex_sub_des') ?></p>
            </div>
        </div>
    </div>
    <img class="top-img" src="/images/cases/lcoin/top-lcoin.png" alt="Lcoin gadget">
    <!-- <video class="video" preload="metadata" autoplay="autoplay" playsinline loop="loop" poster="">
        <source src="/videos/lcoin.mp4" type='video/mp4;'>
    </video> -->
</section>
<section class="main main2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><?= Yii::t('app', 'dex_Product_Details') ?></h2>
                <div class="arrow"></div>
                <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
                <p>Technical app specification</p>
                <ul>
                    <li>platform - web</li>
                    <li>wallet - TRONLink</li>
                    <li>TRON Network tokens support</li>
                    <li>SUN DappChain tokens mapping</li>
                    <li>directly smart contract trading</li>
                </ul>
                <p>Dependability, privacy, transparency and convenience are the most valued characteristics when conducting trading operations, especially when it comes to emerging of traditional payment tools and new-made ones. Developing BIKI DEX we managed it all.</p>
            </div>
        </div>
    </div>
</section>
<section class="main main3"  style="background: #151515; display: none">
    <div class="container">
        <div class="row">
            <div class="scr">
                <img src="/images/cases/screens/lcoin/1.png" alt="Display for lcoin">
                <img src="/images/cases/screens/lcoin/2.png" alt="Display for lcoin">
                <img src="/images/cases/screens/lcoin/3.png" alt="Display for lcoin">
                <img src="/images/cases/screens/lcoin/4.png" alt="Display for lcoin">
                <img src="/images/cases/screens/lcoin/5.png" alt="Display for lcoin">
                <img src="/images/cases/screens/lcoin/6.png" alt="Display for lcoin">
            </div>
        </div>
    </div>
</section>
<section class="main main4" style="background: #151515; display: none">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="img">
                    <img src="/images/cases/shelm.svg" alt="shelm">
                </div>
                <p class="title">Our Team</p>
                <p class="sign">5 Engineers</p>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img src="/images/cases/pin.svg" alt="pin">
                </div>
                <p class="title">Client's Location</p>
                <p class="sign">London, England</p>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img src="/images/cases/stopwatch.svg" alt="stopwatch">
                </div>
                <p class="title">Timeline</p>
                <p class="sign">January 2017</p>
            </div>
        </div>
    </div>
</section>
<div class="col-12" style="text-align: center;"><img class="img-fluid" src="/images/biki.png" alt="biki"></div>
<section class="main main5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Main Features</h2>
                <div class="arrow"></div>
                <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
                <p style="text-align: center;" class="desc">Instantly Accessible. No need for registration or approval from a central authority.</p>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/icons/1.svg" alt="frontend">
                    </div>
                    <p class="title">Decentralized</p>
                    <p class="desc" style="padding: 0 10px; text-align: center;">Trading takes place on a global P2P network of users running BIKI DEX on their own machines.</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/icons/2.svg" alt="backend">
                    </div>
                    <p class="title">Safe</p>
                    <p class="desc" style="padding: 0 10px; text-align: center;">BIKI DEX never holds your funds. Security deposits and multisig trade wallets encourage safe, successful trades.</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/icons/3.svg" alt="design">
                    </div>
                    <p class="title">Private</p>
                    <p class="desc" style="padding: 0 10px; text-align: center;">No one except trading partners exchange personally identifying data. All personal data is stored locally.</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/icons/4.svg" alt="graphic">
                    </div>
                    <p class="title">Open</p>
                    <p class="desc" style="padding: 0 10px; text-align: center;">Code is open source, and project strategy is discussed openly on Keybase and GitHub.</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/icons/5.svg" alt="support">
                    </div>
                    <p class="title">Easy to Use</p>
                    <p class="desc" style="padding: 0 10px; text-align: center;">We've made all this sophistication simple—make your first trade in under 5 minutes!</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/icons/6.svg" alt="support">
                    </div>
                    <p class="title">No fees</p>
                    <p class="desc" style="padding: 0 10px; text-align: center;">No complicated trading fees to have to track and manage. It’s truly free..</p>
                </div>
                <!-- <div class="col3">
                    <div class="img">
                        <img src="/images/cases/icons/7.svg" alt="support">
                    </div>
                    <p class="title">Intuitive</p>
                    <p class="desc">Easy-to-use design with you in mind. Buy or sell your favorite tokens in under a minute.</p>
                </div> -->
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/icons/7.svg" alt="support">
                    </div>
                    <p class="title">Liquid</p>
                    <p class="desc" style="padding: 0 10px; text-align: center;">Easy onboarding for market makers. Fill any size order at the most competitive prices–with no spending limits.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main main5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Our mission</h2>
                <div class="arrow"></div>
                <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
                <p class="desc">BIKI DEX's mission is to provide a secure, private and censorship-resistant way of exchanging bitcoin for national currencies and other cryptocurrencies over the internet.</p>
                <p class="desc">When we say secure, we are referring to the safety of users' funds. Today, most bitcoin exchanges are centralized, requiring users to store their bitcoins— for at least some amount of time— on exchange servers. When thousands of users do this, it creates extreme incentives for those servers to be hacked and for those users' bitcoins to be stolen. And time and time again these hacks and thefts are exactly what happen. </p>
                <p class="desc">When we say private, we are referring to users' ability to control access to their own information. Today, most centralized exchanges require users to divulge personally identifying information in order to set up an account, and then in turn link users' trading activity to their respective identities. This practice creates extreme risks for users that their personal details and financial information will be stolen, leaked or otherwise used against their own best interests.</p>
                <p class="desc">When we say censorship-resistant, we are referring to users' ability to voluntarily trade with one another without interference from a third party. Today, centralized bitcoin exchanges are highly susceptible to such interference. By their nature, they must operate within one legal jurisdiction or another, putting them at risk of being fined or shut down if they do not comply with the laws and other rules of that jurisdiction, which may include restrictions on who can trade and what can be traded, and almost always include requirements to collect personal information as described above.</p>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/frontend.svg" alt="frontend">
                    </div>
                    <p class="title">Front-End</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/backend.svg" alt="backend">
                    </div>
                    <p class="title">Back-End</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/interaction_design.svg" alt="design">
                    </div>
                    <p class="title">Interaction Design</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/graphical_design.svg" alt="graphic">
                    </div>
                    <p class="title">Graphical Design</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/system.svg" alt="support">
                    </div>
                    <p class="title">System Integration</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img src="/images/cases/support.svg" alt="support">
                    </div>
                    <p class="title">Support</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main main9" style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2><?= Yii::t('app', 'dex_Main_Features') ?></h2>
            <div class="arrow grey"></div>
            <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img src="/images/cases/lcoin/purse.svg" alt="purse">
                </div>
                <p class="title"><?= Yii::t('app', 'dex_Main_Features_name_1') ?></p>
                <span><?= Yii::t('app', 'dex_Main_Features_name_1_des') ?></span>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img src="/images/cases/lcoin/left-right.svg" alt="left-right">
                </div>
                <p class="title"><?= Yii::t('app', 'dex_Main_Features_name_2') ?></p>
                <span><?= Yii::t('app', 'dex_Main_Features_name_2_des') ?></span>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img src="/images/cases/lcoin/discover.svg" alt="discover">
                </div>
                <p class="title"><?= Yii::t('app', 'dex_Main_Features_name_3') ?></p>
                <span><?= Yii::t('app', 'dex_Main_Features_name_3_des') ?></span>
            </div>
        </div>
    </div>
</section>
<section class="main main6" style="background: #151515; display: none">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Back-End</h2>
                <div class="arrow arrow-ginger"></div>
                <h4>We launch advanced commerce platforms</h4>
                <p>Our currency is based on bitcoins, which means that buying or earning Lcoins will enable you to exchange it into bitcoins. And currency rate also depends on bitcoins. Our business analysts confirm that with system expanding bitcoin quantity will constantly grow, therefore Lcoin value is going to strengthen sustainably. Also it is bound to be mentioned that our company owns few servers around the world that are connected into one high-speed network with considerable data throughput that maintain users request processing.</p>
            </div>
        </div>
    </div>
</section>
<section class="main main7" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img src="/images/cases/lcoin/lcoin.png" alt="Lafka Basket">
                <p>Along with the client we created a pocket bank that enables customer to:</p>
                <ul>
                    <li>control payments cards and account status</li>
                    <li>sending money to whichever payment card</li>
                    <li>transit money from Lcoins into fiat money and back in a few taps</li>
                    <li>pay in every shop with Lcoins</li>
                </ul>
                <p>lab3m Dev Team is on guard of your payment safety and security. We use innovational technologies to create great products. Lcoin is a new step into future of cryptocurrencies. Make this step with us!</p>
            </div>
        </div>
    </div>
</section>
<section class="main main8"  style="background: #151515;">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2>Inspiration</h2>
            <div class="arrow arrow-ginger"></div>
            <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
            </div>
            <div class="col-sm-4 pr1">
                <div class="img">
                    <img src="/images/cases/lcoin/Letter.svg" alt="Letter">
                </div>
                <!-- <p>Letter</p> -->
            </div>
            <div class="col-sm-4 pr2">
                <div class="img">
                    <img src="/images/cases/lcoin/Coin.svg" alt="Coin">
                </div>
                <!-- <p>Coin</p> -->
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img src="/images/cases/lcoin/L-coin.svg" alt="Lcoin">
                </div>
                <!-- <p>Lcoin</p> -->
            </div>
        </div>
    </div>
</section>
<section class="main main10">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <h2><?= Yii::t('app', 'dex_Iconography_name') ?></h2>
            <div class="arrow"></div>
            <h4><?= Yii::t('app', 'dex_Main_Features_des') ?></h4>
            </div>
        </div>
        <div class="col6"><img src="/images/cases/lcoin/Iconography/1.png" alt="circle"></div>
        <div class="col6"><img src="/images/cases/lcoin/Iconography/2.png" alt="table"></div>
        <div class="col6"><img src="/images/cases/lcoin/Iconography/3.png" alt="settings"></div>
        <div class="col6"><img src="/images/cases/lcoin/Iconography/4.png" alt="info"></div>
        <div class="col6"><img src="/images/cases/lcoin/Iconography/5.png" alt="purse-black"></div>
        <div class="col6"><img src="/images/cases/lcoin/Iconography/6.png" alt="clock"></div>
        <div class="col6"><img src="/images/cases/lcoin/Iconography/7.png" alt="clock"></div>
    </div>
</section>
<section class="main main11"  style="background: #151515;">
<div class="container">
        <div class="row">
            <div class="col-12">
            <h2><?= Yii::t('app', 'text_portfolio_technologies_title') ?></h2>
            <div class="arrow"></div>
            <h4><?= Yii::t('app', 'text_portfolio_technologies_description') ?></h4>
            </div>
            
            <div class="option">
                <div class="item">
                    <div class="img">
                        <img src="/images/techy/1.png" alt="javascript">
                    </div>
                    <!--<p class="title">JavaScript</p>-->
                </div>
                <div class="item">
                    <div class="img">
                    <img src="/images/techy/2.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img src="/images/techy/3.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img src="/images/techy/4.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img src="/images/techy/5.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img src="/images/techy/6.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img src="/images/techy/7.png" alt="javascript">
                    </div>
                </div>
                <div class="item">
                    <div class="img">
                    <img src="/images/techy/8.png" alt="javascript">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="display: none">
        <div class="row">
        <div class="col-12">
            <div class="top-border"></div>
            <h2>Integrations</h2>
            <div class="arrow arrow-ginger"></div>
            <h4>We launch advanced commerce platforms</h4>
            </div>
            <div class="col3">
                <img src="/images/cases/lcoin/visa.png" alt="visa">
                <p class="title">Visa</p>
            </div>
            <div class="col3">
                <img src="/images/cases/lcoin/mastercart.png" alt="mastercart">
                <p class="title">Masterсart</p>
            </div>
            <div class="col3">
                <img src="/images/cases/lcoin/paypal.png" alt="paypal">
                <p class="title">PayPal</p>
            </div>
        </div>
    </div>
</section>
<section class="main main13" style="display: none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="link">
                <a href="/trade3m" class="item lafka">
                        <img class="l-logo" src="/images/works/lafka-logo.png" alt="lafka-logo">
                        <img class="l-text" src="/images/works/lafka-text.png" alt="lafka-text">
                        <!-- <div class="overlay">
                            <p class="title" style="margin: 5px;">Trade3M</p>
                        </div> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/styles/lcoin.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/mCustomScrollbar.min.js", "async" : false},
    {"src" : "/scripts/customScroll.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
