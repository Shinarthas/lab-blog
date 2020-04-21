<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Nowadays, there is a recognition of knowledge management importance. Organizations realise that this is a key of being competitive among others.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Post implementation debrief</h2>
            <p>Nowadays, there is a recognition of knowledge management importance. Organizations realise that this is a key of being competitive among others.</p>
            <p>There is no secret that technologies evolve faster and faster and your staff needs to update their knowledge constantly in order to remain effective. Training your staff is crucial of keeping your project successful.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>We offer customized training as well as scheduled classroom trainings to your staff. Our training experts are available to make the information obvious to your organization. We create a customized training schedule according to the solution our customers done with a consultant. We design training for different skill levels to meet the needs of each participant from beginners to advanced users.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>