<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'The newest technologies have huge potential for business environment and eCommerce became more and more vital nowadays. The main advantage for business owners is that they need to consult customers because they can find info about your company, services you provide and prices.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
    <div class="row">
        <h1><?=$h1?></h1>
    </div>
</div>
<div class="container">
    <div class="row">
          <div class="content">
            <p>The newest technologies have huge potential for business environment and eCommerce became more and more vital nowadays. The main advantage for business owners is that they need to consult customers because they can find info about your company, services you provide and prices.</p>
            <p>E-commerce simplify customers and your own life. Customers don’t to open offices or hire foreign agents to make transactions. Wholesales and retail trading are increasing because of fast and guaranteed delivery and reduces range of required reserves. You can totally reduce your expenses and create a company using only a computer.</p>
            <p>There are a lot of ready-made platforms that can definitely replace custom internet shops if don’t have much time or money to create them. These platforms have a full spectre of tools and settings and you can increase its functionality by setting up proper plug-ins. Thunderrise is ready to help and expand your website's possibilities.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>In Thunderrise a <strong>content management system (CMS)</strong> is a software application or set of related programs that are used to create and manage digital content. There are a lot of features of CMSes, such as:</p>
            <ul>
                <li>Intuitive indexing, search and retrieve features index all data for easy access through search functions and allow users to search by attributes such as publication dates, keywords or author. 
                <li>Examination features allow content to be updated and edited after initial publication. Revision control also follows any fixes made to files by individuals.
                <li>Publishing functionality allows individuals to use a gauge or a set of gauges endorsed by the organization, as well as wizards and other tools to create or modify content.
            </ul>
            <p>Thunderrise also uses a CMS to provide tools for one-to-one marketing. One-to-one marketing is the ability of a website to join its content and advertising to a client's characteristics using information indicated by the cusromer or gathered by the site.</p>
            <p>We're waiting for your message! Contact us and we will turn into reality your idea!</p>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>