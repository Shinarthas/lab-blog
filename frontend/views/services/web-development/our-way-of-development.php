<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'So how we do it in lab3m? Our opus primum is to provide excellent web development service. We earn our reputation by making our sites useful, profitable and UNIQUE.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Our way of development</h2>
			<p>So how we do it in lab3m? Our opus primum is to provide excellent web development service. We earn our reputation by making our sites useful, profitable and UNIQUE. We made an accent on the last clue because it’s our main goal. Unique sites are the best to promote your service and it keeps you one step ahead your competitors.</p>
			<p>Before starting work we analize our future project. It is one of the most important part of devleping. After that we prepare developerment team for each project. Finally, we have work schedule</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Nowadays, if you want to rich high goal, you should have unique UI/UX design, powerful back-end, perfect SEO optimization and others factors. lab3m can give all of this opportunities.</p>
			<p>Do you have great idea? Do you want to life out it? You've come to the right place! Follow your dream and contact us right now!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>