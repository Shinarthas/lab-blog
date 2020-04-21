<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Wearable technologies are gaining more and more popularity. There is no reason to have doubts that update to update WT will find the way to every house. Soon, people couldn\'t imagine life without their favourite smartwatch or fitness tracker.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Wearable future</h2>
            <p>Wearable technologies are gaining more and more popularity. There is no reason to have doubts that update to update WT will find the way to every house. Soon, people couldn't imagine life without their favourite smartwatch or fitness tracker. The same thing we feel feel now when try to figure our lives without smartphones or computers.</p>
            <p>The rise of wearable technologies has been fueled by technology’s tendency to get faster and smaller at the same time. If we can be sure of anything, it’s that the future means we’ll be wearing our technology on the outside, and, perhaps one day, on the inside, too.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Usually long-term tech trends are rather difficult to predict. Smaller and more powerful devices will be available for lower and lower costs and that will be just the beginning. Not surprising that soon we will see smartjewelry or smartboots. From then it will be a signal of total domination of wearable technologies.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>