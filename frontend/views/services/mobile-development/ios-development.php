<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'lab3m provides the full pack of IOS Development services. It includes building, designing, testing and launching complete IOS applications. IOS apps increase yield of any company because it makes your project more accessible and bright.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Ios development</h2>
			<p>lab3m provides the full pack of IOS Development services. It includes building, designing, testing and launching complete IOS applications. IOS apps increase yield of any company because it makes your project more accessible and bright.</p>
			<p>We have a tight-knit team of IOS developers. They can provide best solutions in your future IOS app design and development. We perform all stages of IOS app production from creating a concept to designing, deploying and promoting a product.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Here at lab3m we turn our customers specifications into their desired wish. Be sure that your app will fit all the Apple requirements and guidelines. Our developers will make your app user-friendly, stylish and elegant. Customers satisfaction is our main goal so we furnish them with regular reports and. Our project manager provide clients a detailed information so they can make sure that the work progress is on the right way.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>