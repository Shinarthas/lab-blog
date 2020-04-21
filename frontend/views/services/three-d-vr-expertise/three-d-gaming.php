<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Thunderrise provide an excellent service in creation of 3D and VR games. Our specialists use the newest and the best solutions']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>3D gaming</h2>
            <p>Thunderrise Dev Team provides an excellent service in creation of games and applications using <strong>3D and Virtual Reality</strong> technologies. Our experienced specialists use the most innovational proved methods and are able to implement your ideas into actual project and improve its workflow utilizing progressive IT achievements.</p>
			<p>We use accredited decisions and <strong>3D development engines</strong> in order to provide our customers with the finest product. Also we gladly take a raw idea and transform it to a spellbinding 3D game for multiple devices. Our game development process includes such stages as 3D character modeling, 3D animation, game design, 3D effects, in particular we pay attention to special shaders, scripts, modifiers and automation of recurring manual processes.</p>
			<p>3D is primarily associated with gaming but there is more to it than this, e.g. 3D is widely used in marketing, to publish interactive engaging 3D models and virtual worlds, 3D brochure apps and navigation apps.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Virtual Reality is technology which makes the user feel as if the person is in a virtual environment. Beside greatly popular usage in game development it can be utilized for business purposes as well in forms of:</p>
			<ul>
				<li>virtual tour;</li>
				<li>a tool for employee training;</li>
				<li>360° view of the products, etc.</li>
			</ul>
			<p>With help of VR business can greatly benefit and spread its influence to much larger audience since VR provide higher level of customers engagement.</p>
			<p><strong>3D and VR</strong> game development along with business apps development are good niche to establish a startup in.</p>
			<p>Let’s dive in together! Please contact our Thunderrise Development Team!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>