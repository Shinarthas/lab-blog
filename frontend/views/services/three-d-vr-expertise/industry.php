<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'What is “virtual reality”? It’s a computer generated digital environment. A user becomes a part of this virtual environment so he can operate things inside it and perform some actions that are planned in a VR program']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Industry</h2>
            <p>What is “virtual reality”? It’s a computer generated digital environment. A user becomes a part of this virtual environment so he can operate things inside it and perform some actions that are planned in a VR program.</p>
            <p>Virtual experience is performed with the help of head-mounted display (HMD) that display three-dimensional images. Some systems are able to give additional experience such as sound or video which contributes to their overall experience.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Virtual reality in modern interpretation was theorized in 1964. Stanislav Lem in his book “Summa Technologiae” describes a reality that is an absolute copy of our reality for creature that live there but it is ruled by other laws. Lem names it “phantomology”.</p>
            <p>Nowadays VR is not only used in gaming or entertainment but also for a lot of different corporate goals. Now there are softwares for training surgery workers, pilots, soldiers, for business data visualization or even a virtual art exhibition.</p>
            <p>We have a team of 3D specialists so they can offer you a revolutionary solution in VR applications development.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>