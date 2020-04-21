<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'For many patients, especially those who suffer from chronic illness, wearable technology are extremely useful. They can provide a long-term view of a patient’s overall health. Like in the case of fitness, WTs can track a lot meaningful patient data so it increases both patient engagement and preventive care.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Health & medicine</h2>
            <p>For many patients, especially those who suffer from chronic illness, wearable technology are extremely useful. They can provide a long-term view of a patient’s overall health. Like in the case of fitness, WTs can track a lot of meaningful data on patient’s condition, therefore increasing both patient engagement and preventive care.</p>
			<p>One of the most important usage of wearable technology is biometrical prosthesis. It definitely changes healthcare process for disabled people. Good thing is these technologies become more and more available for common people with each year. And we believe someday, perhaps in 10 or 15 years, losing an arm won’t be a tragedy.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Dip into the future, there will be implants with sensors, which can measure blood data of people with diabetes. Moreover, there will be special gadgets, that will notify you about changes of your condition (e.g. temperature, blood pressure, degree of oxygen in blood etc.) This high-tech approach to healthcare will change our life!</p>
			<p>What do people think about using wearable tech to track their health? According to a recent survey by some software service companies, 81% of respondents said they would like to see more connected and wearable devices used in healthcare, with half of respondents saying they thought wearables were potentially most useful to monitor vulnerable people. In this case we see that people ready to use wearable technologies permanently. What do you think about this statement? Do you agree?</p>
			<p>lab3m has professional developers that have ponderable experience in app development for wearable technologies in the healthcare field. Contact us right now and let's discuss this topic!</p>
			<p>lab3m - let's create something great to help people together!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>