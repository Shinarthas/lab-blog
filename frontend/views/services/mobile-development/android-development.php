<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'In the past few years Android has become the most popular platform in the world. As a matter of experience, Android apps can increase your business efficiency and profitability.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Android development</h2>
			<p>In the past few years Android has become the most popular platform in the world. As a matter of experience, Android apps can increase your business efficiency and profitability.</p>
			<p>Here at Thunderrise, we provide no-of-a-kind service in creating and supporting Android applications of any complexity. We prefer the latest technologies to be used in our work and our developers always progress to provide excellent service. Now we work with analytics integration, cloud hosting, geolocation, social network integration, game development and other kinds of Android features.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Our developers provide all stages of an Android app production including  concept creation, wireframe modeling, project management, prototype development, frontend and backend creation, UI/UX design, usability evaluation, QA and testing, Android Market launch.</p>
			<p>We also understand that co-working between developer and client is important so we provide a constant communication via our project managers. Our clients are given a report on every stage of development.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>