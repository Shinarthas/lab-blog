<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'If you seek for perfect platform to create an online store, Opencart CMS is for you. Today\'s customer does the shopping online and it has many reason: non-stop operations, time-saving, absence of all the shopping fuss, delivery to home.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Opencart development</h2>
            <p>If you seek for perfect platform to create an online store, Opencart CMS is for you. Today's customer does the shopping online and it has many reason: non-stop operations, time-saving, absence of all the shopping fuss, delivery to home. Nowadays online stores are more characterized by its attractiveness, shops and supermarkets unfortunately can’t offer this kind of attraction. If you want your online store to become the best place to shop, follow these requirements.</p>
            <p>Thunderrise offers full pack of Opencart development service. Our developers are experienced specialists in creating online shops and corporate websites on the basis of Opencart. Contact us and be sure that everything will be done on a high level.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>The modularity of Opencart CMS allow to modify your website without spending much time. Opencart based online shops are optimized for search engines so it reduces time to index it. Despite Opencart is free CMS, its support and updating lies in the hands of a large community of enthusiasts. Thunderrise can provide you with Opencart eCommerce development service.</p>
            <p>Creating an online store from the scratch could be rather a challenging task. Website building requires knowledge and experience in programming languages. It will also take a lot of time and additional expenses. Opencart extremely simplifies an online store creation process, you can run online in just a day.</p>
            <p>If you don’t like default available patterns, Thunderrise can create your unique website. Opencart is a good platform for website optimization so we can also optimize your OpenCart based website. It is crucial to make your site ahead of competitors.</p>
            <p>Thunderrise provides the full variety of services based on web technologies which use eCommerce, B2B and B2C solutions. All you need is to contact us and start going online with our assistance.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>