<?php
$this->title = ucfirst("lab3m project - Melo. Let's enjoy music together");

/*$this->registerJsFile('/scripts/jquery-1.12.4.min.js');
$this->registerJsFile('/scripts/mCustomScrollbar.min.js');*/

/*$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/mCustomScrollbar.css");
$this->registerCssFile("/styles/melo.css");*/

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Melo, We have created the new understanding of how you being spread through the globe can still enjoy music together using IT Technologies'
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
.main .green{
    background: url(../images/arrow/green.png) no-repeat 50% 50%;
}
.main .top-border{
    border-top: 1px solid #c8b4a5;
    margin: 70px 0;
}
.main1{
    background-color: #2eb64a;
    margin-top: 70px;
    text-align: center;
    height: 1400px;
    overflow: hidden;
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
}
.main1 .top-img{
    position: absolute;
    bottom: -80px;
    left: 50%;
    transform: translate(-50%);
}
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
.main2 ul li,
.main2 p{
    font: 18px/36px 'Work Sans', sans-serif;
    color: #fff;
    text-align: left;
}
@media (max-width:991px){

.main1 h1{font-size: 60px;}
}
@media only screen and (max-width:767px){
.main1{height: auto;padding: 0 0 100px;}
.main1 .top-img,.main1 .video{display: none;}
}
@media only screen and (max-width: 449px){

    .main1 h1{
        font-size: 48px;
    }
    .main1 h2{
        font-size: 22px;
    }
}
</style>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?>

<section class="main main1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Melo</h1>
                <div class="arrow green"></div>
                <h2>We develop native iOS and Android apps</h2>
                <p>Melo is a social music live streaming application that parse together socially active melomanes by enabling to air the music they wish to share with others. It has joint possibility of a music radio and social media in its most comfortable form.</p>
            </div>
        </div>
    </div>
    <img class="top-img" data-src="/images/cases/melo/top-melo.png" alt="Melo gadget">
    <video class="video" preload="metadata" autoplay="autoplay" playsinline loop="loop" poster="">
        <source src="/videos/melo.mp4" type='video/mp4;'>
    </video>
</section>
<section class="main main2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Product Details</h2>
                <div class="arrow"></div>
                <h4>We launch advanced commerce platforms</h4>
                <p>Melo enables you to:</p>
                <ul>
                    <li>create your own music channel based on your taste and  preferences and share it with friends</li>
                    <li>join nearby transmissions and listen on-line music</li>
                    <li>leave comments, chat with people, check and discuss their playlists</li>
                    <li>get notifications of incoming messages, about new music, trends and nearby channels</li>
                    <li>create a joint list with your friends and add music that you can listen on parties, picnics, etc</li>
                    <li>to enjoy modern and fast build-in player that will become a natural continuation of your headphones and a lifestyle</li>
                </ul>
                <p>It’s an original application designed and developed by lab3m Dev Team. An idea came as an attempt to revive traditional radio in the new format of social interaction.</p>
            </div>
        </div>
    </div>
</section>
<section class="main main3">
    <div class="container">
        <div class="row">
            <div class="scr">
                <img data-src="/images/cases/screens/melo/1.png" alt="Display for melo">
                <img data-src="/images/cases/screens/melo/2.png" alt="Display for melo">
                <img data-src="/images/cases/screens/melo/3.png" alt="Display for melo">
                <img data-src="/images/cases/screens/melo/4.png" alt="Display for melo">
                <img data-src="/images/cases/screens/melo/5.png" alt="Display for melo">
                <img data-src="/images/cases/screens/melo/6.png" alt="Display for melo">
                <img data-src="/images/cases/screens/melo/7.png" alt="Display for melo">
                <img data-src="/images/cases/screens/melo/8.png" alt="Display for melo">
            </div>
        </div>
    </div>
</section>
<section class="main main4">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/shelm.svg" alt="shelm">
                </div>
                <p class="title">Our Team</p>
                <p class="sign">7 Engineers</p>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/pin.svg" alt="pin">
                </div>
                <p class="title">Client's Location</p>
                <p class="sign">San Francisco, USA</p>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/stopwatch.svg" alt="stopwatch">
                </div>
                <p class="title">Timeline</p>
                <p class="sign">April 2015 - Today</p>
            </div>
        </div>
    </div>
</section>
<section class="main main5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Involvement</h2>
                <div class="arrow"></div>
                <h4>We develop native iOS and Android apps</h4>
                <p class="desc">Tunderrise team uses proven to be effective TECHNOLOGIES to deliver outstanding result going at design, frontend and backend tooth and nail. PHP, jQuery, JavaScript, HTML5, CSS3, MSQL, Qbjective-C, Java.</p>
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
                        <img data-src="/images/cases/system.svg" alt="support">
                    </div>
                    <p class="title">System Integration</p>
                </div>
                <div class="col3">
                    <div class="img">
                        <img data-src="/images/cases/support.svg" alt="support">
                    </div>
                    <p class="title">Support</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main main9">
    <div class="container">
        <div class="row">
            <h2>Main Features</h2>
            <div class="arrow arrow-ginger"></div>
            <h4>We launch advanced commerce platforms</h4>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/melo/music.png" alt="Music">
                </div>
                <p class="title">Music streaming</p>
                <span>Keep up with the latest music tendencies</span>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/melo/share.png" alt="Share">
                </div>
                <p class="title">Share with friends</p>
                <span>Create joint playlists with your friends</span>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/melo/discover.png" alt="Discover">
                </div>
                <p class="title">Discover by locations</p>
                <span>Find your music mates in your region</span>
            </div>
        </div>
    </div>
</section>
<section class="main main6">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img data-src="/images/cases/melo/melo-touch.jpg" alt="Lafka Basket">
                <h2>How It Works?</h2>
                <p>Joint music listening becomes truly comfortable with Melo. After you are logged into your profile or connected to shared channel you can add your favourite tracks that will be sorted by Melo and played one track of each member at a time. This way playlist will be full of different musical genres and you will surely enjoy your time in a company of kindred people and their musical tastes.</p>
            </div>
        </div>
    </div>
</section>
<section class="main main7">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Back-End</h2>
                <div class="arrow arrow-ginger"></div>
                <h4>We launch advanced commerce platforms</h4>
                <p>Multiserver utility: nearest available server is defined to establish a station in purpose of ample data exchange speed improving. Separate servers adapted to large data transfers are utilized for music streaming. Server access is provided by open API with extensive documentation that affords other developers to code addons for the initial project.</p>
            </div>
        </div>
    </div>
</section>
<section class="main main8">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <img data-src="/images/cases/melo/melo.png" alt="Lafka Basket">
                <p>Melo is a medium for collective realtime music listening. It’s a new word in social media that contributes new experience to melomanes.</p>
            </div>
        </div>
    </div>
</section>
<section class="main main10">
    <div class="container">
        <div class="row">
            <h2>Inspiration</h2>
            <div class="arrow arrow-ginger"></div>
            <h4>We launch advanced commerce platforms</h4>
            <div class="col-sm-4 pr1">
                <div class="img">
                    <img data-src="/images/cases/melo/Melody.svg" alt="Basket">
                </div>
                <p>Melody</p>
            </div>
            <div class="col-sm-4 pr2">
                <div class="img">
                    <img data-src="/images/cases/melo/Wing.svg" alt="Smile">
                </div>
                <p>Wing</p>
            </div>
            <div class="col-sm-4">
                <div class="img">
                    <img data-src="/images/cases/melo/Melo.svg" alt="Lafka-smile">
                </div>
                <p>Melo</p>
            </div>
        </div>
    </div>
</section>
<section class="main main11">
    <div class="container">
        <div class="row">
            <h2>Iconography</h2>
            <div class="arrow"></div>
            <h4>We launch advanced commerce platforms</h4>
        </div>
        <div class="col6"><img data-src="/images/cases/melo/melo_geopoint.png" alt="melo geopoint"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_client.png" alt="melo client"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_music.png" alt="melo music"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_documentation.png" alt="melo documentation"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_like.png" alt="melo like"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_cycle.png" alt="melo cycle"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_play.png" alt="melo play"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_flows.png" alt="melo flows"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_equalizer.png" alt="melo equalizer"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_share.png" alt="melo share"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_exit.png" alt="melo exit"></div>
        <div class="col6"><img data-src="/images/cases/melo/melo_song.png" alt="melo song"></div>
    </div>
</section>
<section class="main main12">
    <div class="container">
        <div class="row">
            <h2>Technologies</h2>
            <div class="arrow arrow-ginger"></div>
            <h4>We launch advanced commerce platforms</h4>
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
                    <img data-src="/images/tehnologies/ios.png" alt="Objectiv-C">
                </div>
                <p class="title">Objectiv-C</p>
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
                    <img data-src="/images/tehnologies/cache.png" alt="yandex">
                </div>
                <p class="title">DFCache</p>
            </div>
            <div class="item">
                <div class="img">
                    <img data-src="/images/tehnologies/afn.png" alt="afn">
                </div>
                <p class="title">AFNetworking</p>
            </div>
            <div class="item">
                <div class="img">
                    <img data-src="/images/tehnologies/realm.png" alt="realm">
                </div>
                <p class="title">Realm</p>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="top-border"></div>
            <h2>Integrations</h2>
            <div class="arrow arrow-ginger"></div>
            <h4>We launch advanced commerce platforms</h4>
            <div class="col5">
                <img data-src="/images/tehnologies/relic.png" alt="relic">
                <p class="title">New relic</p>
            </div>
            <div class="col5">
                <img data-src="/images/tehnologies/tube.png" alt="YouTube">
                <p class="title">YouTube</p>
            </div>
            <div class="col5">
                <img data-src="/images/tehnologies/fb.png" alt="Facebook">
                <p class="title">Facebook OAuth</p>
            </div>
            <div class="col5">
                <img data-src="/images/tehnologies/vk.png" alt="vkontakte">
                <p class="title">VK OAuth</p>
            </div>
            <div class="col5">
                <img data-src="/images/tehnologies/twi.png" alt="Twitter">
                <p class="title">Twitter OAuth</p>
            </div>
        </div>
    </div>
</section>
<section class="main main13">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="link">
                    <div class="item">
                        <h2>Lafka</h2>
                        <a href="/works/lafka" class="items">
                            <img data-src="/images/works/lafka0.png" alt="lafka">
                            <div class="overlay">
                                <p class="title">Lafka</p>
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
</section>
<!-- <link rel="stylesheet" href="/styles/home.min.css"> -->
<script>var ms=document.createElement("link");ms.rel="stylesheet";
ms.href="/styles/melo.css";document.getElementsByTagName("head")[0].appendChild(ms);
</script>
<script>var scr = {"scripts":[
    {"src" : "/scripts/jquery-1.12.4.min.js", "async" : false},
    {"src" : "/scripts/bootstrap.min.js", "async" : false},
    {"src" : "/scripts/mCustomScrollbar.min.js", "async" : false},
    {"src" : "/scripts/customScroll.js", "async" : false},
    {"src" : "/scripts/app.js", "async" : false}
    ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
</script>
