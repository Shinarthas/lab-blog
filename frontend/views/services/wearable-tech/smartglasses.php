<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'These are wearable computer glasses that add information to what a user sees. Such effect is achieved through an optical head-mounted display. Modern smartglasses are hands free and are manipulated via natural language voice commands, but there are models that use touch buttons']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Smartglasses</h2>
            <p>These are wearable computer glasses that add information to what a user sees. Such effect is achieved through an optical head-mounted display. Modern smartglasses are hands free and are manipulated via natural language voice commands, but there are models that use touch buttons.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Smartglasses are very popular among businessmen and designers. The benefits of smartglasses are rather obvious but let’s list them:</p>
            <ul>
                <li>Fast access to data. Now employees don’t need to remember tons of information, everything is located just before eyes</li>
                <li>Video streaming. It can be used in many situations. For example, having an conference doesn’t require actual presence of members</li>
                <li>Online consultations. Imagine that your computer breaks and you need to repair it because all the work has stopped. Call the service center and they will know where is the trouble examining it “with your eyes”</li>
            </ul>
            <p>lab3m specialists provide excellent service in everything that is near smartglasses so contact us and order your own.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>