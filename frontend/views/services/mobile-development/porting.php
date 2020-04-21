<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Porting is basically creating an app with original functionality of a primal app for another platform to reach an additional market. For that we provide an end-to-end app porting services for iOS, Android and from PC to listed mobile platforms.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Porting</h2>
			<p>Porting is basically creating an app with original functionality of a primal app for another platform to reach an additional market. For that we provide an end-to-end app porting services for iOS, Android and from PC to listed mobile platforms. To maximize effectiveness of porting process we will use our best management and technical tools so we could meet every possible need of our customer and provide best service ever.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Why porting?</p>
			<ul>
			  <li>to reach new markets;</li>
			  <li>to enrich your brand exposure and recognizability;</li>
			  <li>to strengthen positions among competitors;</li>
			  <li>saving money and time instead of building new application.</li>
			</ul>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>