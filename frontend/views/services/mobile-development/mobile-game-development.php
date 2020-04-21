<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Mobile games become more popular and profitable day by day. Thunderrise offers services of creating IOS and Android games.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Mobile game development</h2>
			<p>Mobile games become more popular and profitable day by day. Thunderrise offers services of creating IOS and Android games. If you have an idea and vision of the future project, come to us and we will make your dreams come true. Our experienced game development team has its hand 2D, 3D animation, scripting, designing, front/backend development and GUI.</p>
			<p>We work with the most popular game engines like Unity3D, Shiva, C++ etc. Mostly we use Unity because it’s able to provide quick and impressive results, plus it’s extremely reliable.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>At Thunderrise we consider game development as a chance to get creative. Our customers are also involved in development process in order to receive the exact product they want. Our task is to meet their preferences and in the end help them to achieve their business goal - profitability.</p>
			<p>Speaking about monetization, there are several forms to gain profit from your game. The most easy to perform is pay-to-play. However, the most successful brands give away their games for free. They earn money with in-game purchases or turning off adverts.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>