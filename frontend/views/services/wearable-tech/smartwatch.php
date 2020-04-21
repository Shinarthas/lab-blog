<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Although smartwatches are quite new technology. It is a wristwatch with in-built computer and it has a huge amount of features and with the release of new models their functionality increases.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Smartwatch</h2>
            <p>Although smartwatches are quite new technology. It is a wristwatch with in-built computer and it has a huge amount of features and with the release of new models their functionality increases. Sometimes, these upgrades can be unexpected to customers.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Let’s have a look at some benefits that smartwatch can offer to a customer:</p>
            <ul>
                <li>A lot of smartwatches complement smart phones so cell phone companies promote them.</li>
                <li>Unlike most of new technologies, smartwatches don’t cost a lot of money, so they are rather affordable</li>
                <li>They have huge amount of functions. Some models have inbuilt flash drives, activity trackers, social network integration</li>
            </ul>
            <p>Smartwatches are rather new technology so creating applications for them can be a good idea for startup. It’s time to contact us and order your new app</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>