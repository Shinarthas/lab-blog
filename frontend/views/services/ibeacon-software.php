<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'IBeacon is a technology that allows companies to advertise their products from potential customers smartphone that are located near the provider. Usually it is used as an indoors positioning system. IBeacon is rather useful so smartphone’s application can roughly locate it in a shop. It shows notifications about goods that are on sale via smartphones screen. It can also conduct payment operations so you don’t need to engage with your credit card or wallet.']);
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
            <p>What is <strong>iBeacon</strong>?</p>
			<p>IBeacon is a technology that allows companies to advertise their products from potential customers smartphone that are located near the provider. Usually it is used as an indoors positioning system. IBeacon is rather useful so smartphone’s application can roughly locate it  in a shop. It shows notifications about goods that are on sale via smartphones screen. It can also conduct payment operations so you don’t need to engage with your credit card or wallet.</p>
			<p>This technology is definitely a new milestone in the way marketing is done. Now any brand, shop or app is able to show their customers exactly what is in front of them using highly contextual messages about goods they see in front of them.</p>
			<p>Why is iBeacon a Great Thing</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>With an iBeacon network, all brands, tradesfolk, app, or platform will be able to understand exactly where a customer is located. This provides an opportunity to send customers highly hyperlocal, significant messages and advertisements on their smartphones.</p>
			<p>Let's consider the typical motion script. A customer carrying a smartphone walks into a store. Apps installed on a client’s smartphone listen for iBeacons. When an app hears an iBeacon, it informs the relevant data to its server, which then trigger circuits an action. This is like a push message [“Welcome to Target! Check out Doritos on Aisle 3!”], and could include other things like targeted advertisements, special offers, and helpful reminders [“You’re out of Milk!”]. Other possible applications include mobile payments and shopper analytics and  consummation outside of retail, at airports, theme parks, and more. The potential is	unrestricted.</p>
			<p>lab3m uses this technology in our project! With the help of it we can increase our client's income and steamline interaction with customers.</p>
			<p>lab3m - follow your dream and let's us bring to life your project!</p>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>