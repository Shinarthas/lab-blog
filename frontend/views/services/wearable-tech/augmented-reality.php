<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'It is a technology that provides a real-time addition to reality surroundings enhanced by computer graphics. Users can see a life-like 3D objects around them.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Augmented reality</h2>
            <p>It is a technology that provides a real-time addition to reality surroundings enhanced by computer graphics. Users can see a life-like 3D objects around them. AR is definitely a technology of the future and it’s making its way to market so top brands increase their interest to this gear.</p>
            <p>Augmented reality is used to enhance images with additional layers in fields where instant visualization is necessary. For example, designers of interior can create a 3D model of a room so their clients could see what it will actually look like instead of making a table miniature.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Most of companies use AR in big cities so customers can interact with scoreboards and billboards to promote their products.</p>
            <p>AR can also be used in business to hold a meeting without an actual presence of every member. It will definitely transform the way business will be done.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>