<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'If you want to sell something online, Shopify is definitely what you need. It’s one the most popular platforms to deal with online transactions. It is in a great request among small internet stores, which are seeking for their actual audience.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Shopify development</h2>
            <p>If you want to sell something online, Shopify is definitely what you need. It’s one the most popular platforms to deal with online transactions. It is in a great request among small internet stores, which are seeking for their actual audience. At Thunderrise we are able to build eCommerce software of any complexity on the basis of Shopify. You can use these stores for portfolio intention, or as the first step in signing up clients for Shopify.</p>
            <p>There is content management system (CMS) which is included to Shopify, a system for creating blogs and customers profiles. Traders have an ability to surveille the popularity and condition of their Shopify shop. Shopify also offers a huge amount of applications which will help to make your site more convenient to manage. You can order a Shopify app development here at Thunderrise.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Shopify has a lot of advantages and it’s very simple. Let’s have a look at some benefits:</p>
            <ul>
                <li>It doesn’t require any special software to install</li>
                <li>It’s the best feature-packed platform</li>
                <li>Cloud-basement</li>
                <li>Flexibility</li>
                <li>Additional plug-in support</li>
            </ul>
            <p>If you don’t want to waste your precious time, trust your Shopify development to Thunderrise and concentrate on your core goals.</p>
            <p>Thunderrise has plan in development <strong>Advanced Shopify</strong>. Let's pull down it:</p>
            <ul>
                <li>Discount engine. Ingenious approach to appeal your future customers</li>
                <li>Gave up checkout recovery. Customers will lay out upwards</li>
                <li>Real time of shipping. Clients will trust you!</li>
            </ul>
            <p>If you stand by this tips, you will increase your income! What do you think about our strategy? Contact with us and let's discuss it!</p>
            <p>Thunderrise - follow your dream and let's us bring it to life!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>