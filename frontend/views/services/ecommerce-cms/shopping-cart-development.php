<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Going online has a lot of benefits for business that is aimed to make profit. The stores are now in a distance of a click and it’s a huge advantage in convenience for customers. ECommerce becomes more and more competitive today.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Shopping cart development</h2>
            <p>Going online has a lot of benefits for business that is aimed to make profit. The stores are now in a distance of a click and it’s a huge advantage in convenience for customers. ECommerce becomes more and more competitive today. There are a lot of eCommerce platforms so it’s now easy to get tangle in the variety. So here we are to assist you. It’s time to build your own online store. Contact us and together we will get to the most appropriate solution for you!</p>
            <p>Thunderrise offer ShoppingCart development to our customers. ShoppingCart is a solution for your business because it not only allows to establish an online store but also to integrate functionality payments. Shopping is not the only one function ShoppingCart has. Customers are able to use an advanced search via answering machine. There is also an extra function that allows customers to look for cheaper alternatives of the goods they if they are too expensive.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Thunderrise has a team of experienced ShoppingCart developers. If a default gear pack is not enough for you, we can provide you with custom-made features. We will build your shopping website not only conspicuous but convenient to use and manage. In addition, we offer a mobile version of your site so customers will be able to make purchases wherever and whenever they want.</p>
            <p>Using a ShoppingCart you can watch your successes via integrated statistics reports so you can trace the tempo your business moves. Your online shop is able to customize and control in the way you like it. All users data is secured with unique accounts.</p>
            <p>In 2016 there is no difficulties in opening your own online store. It’s not the thing to worry about because ShoppingCart allows you to sell your product 24/7. Contact us and we will answer all the questions that can remain after the article.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>