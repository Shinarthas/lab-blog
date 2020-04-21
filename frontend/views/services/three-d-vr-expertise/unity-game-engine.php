<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Unity is the best solution to develop a video game. It provides intuitive tools that allow to design an excellent 3D game.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Unity game engine</h2>
            <p>Meet Unity-chan, the best solution to develop a video game. It is a 2D/3D engine and framework that provides 	intuitive tools allowing to design an excellent 2D, 2.5D and 3D game or app. Apps include training simulators, first-responder applications, and other business-focused applications developed with Unity that need to interact with 2D/3D space. Let’s have a look at pros of using <strong>Unity</strong> in game development:</p>
			<ul>
				<li>better code stability compared to other more complicated languages, this allows to avoid many errors;</li>
				<li>usage for games based on physics;</li>
				<li>more flexible game porting on different platforms like iOS, Windows and Android;</li>
				<li>visual components interactions;</li>
				<li>major 3D applications and audio formats supporting;</li>
				<li>import and assembling assets;</li>
				<li>creating or import animations for use with an advanced animation system;</li>
				<li>price free.</li>
			</ul>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Moreover <strong>Unity</strong> is used as a form of an additional memory and resources that enabling users to work on two and more projects simultaneously. This attribute   significantly increased  efficiency development workflow. Unity promotes agile game creation, allowing current releases and quick prototyping, once you got the essence of how it works. Game developers in our company work with great inspiration to create something great following your idea!</p>
			<p>Thunderrise Dev Team with Unity-chan assistance will be glad to collaborate with you in creating engaging and fun 3D project. Contact us right away.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>