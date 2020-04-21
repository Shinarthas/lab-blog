<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'About just ten years ago, people didn’t even imagine the possibilities that wearable devices can offer. WT have started a new age in technologies. Both personal and business life changes with its usage. It allows to achieve goals, track them, optimize and enhance the working process']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Personal and business solutions</h2>
            <p>About just ten years ago, people didn’t even imagine the possibilities that wearable devices can offer. WT have started a new age in technologies. Both personal and business life changes with its usage. It allows to achieve goals, track them, optimize and enhance the working process.</p>
            <p>The variety of applications that support wearable technologies is huge. Usage varies from simple entertainment and serious business, medicine and warfare.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Personal usage often comes down to gaming and virtual 3D experience. Users are allowed to become a part of a life-like environment and undergo totally new emotions. But gaming is not the only thing to practise WT. There are some applications form fitness achievements that can display vital indexes and other measures such steps walked, miles jogged, calories burnt and other.</p>
            <p>Businessmen are also into wearable technologies because it can help to optimize their work. Smartglasses, for example, have become a big part of business meetings as they can store all the information that is needed just before eyes so there is no need in papers anymore.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>