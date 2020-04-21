<?php
$this->title = 'Error 404! We have other pages for you!';

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/error.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Error 404! Thunderrise - we develop native apps for iOS and Android!']);
?>

<div class="e404w">
    <div class="e404">
        <img src="/images/404.svg" alt="404">
        <h1>
            It seems like this page doesn't exist!
            <br>
            But don't worry, we have other pages for you :)
        </h1>
        <!-- <div class="arrow"></div>
        <div class="link">
            <a href="/">Main</a>
            <a href="/works">Works</a>
            <a href="/blog">Blog</a>
            <a href="/company">Company</a>
            <a href="/contacts">Contacts</a>
        </div> -->
    </div>
</div>
