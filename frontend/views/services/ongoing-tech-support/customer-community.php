<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Customer community creation is one of the most important factors that brings success to the project. To succeed in a project it’s extremely important to create a customer community']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Customer community</h2>
            <p>Customer community creation is one of the most important factors that brings success to the project. To succeed in a project it’s extremely important to create a customer community.</p>
            <p>That is very important for advertising your project. The key is that you already have a relevant audience so you can concentrate on giving them forehanded information about your product as well as you can receive a feedback. Thunderrise uses the most efficient marketing solutions so there will be no problem in gaining a wide audience quickly.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>We can offer you a creation of strong customer community by advertising your product in social networks, forums and other relevant topics. Your customers whether they are current or potential will be familiar of all the news and advantages of your product.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>