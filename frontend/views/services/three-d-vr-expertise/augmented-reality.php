<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'The Augmented Reality is a mind-blowing concept. Imagine that virtual 3D objects appear in the real world and accrescent the existing things. Users view through HMD or at a monitor to see additional things like how a painting you want to buy will fit on the wall or a real-time GPS before your eyes.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Augmented reality</h2>
            <p><strong>The Augmented Reality</strong> is a mind-blowing concept that really fast became extremely popular among different professions and industry sectors. To put it simply, AR allows app developers and businesses to overlay digital data on top of real world objects. By appearance in the real world 3D objects become experiences of a lifetime like take you in a blink of an eye to Mars. For more practical example, by viewing through HMD or a monitor users can see see additional things like how a painting you want to buy will fit on the wall or a real-time GPS before your eyes. Or interior designer while explaining his ideas to client can visualize them via smart glasses. Huge shopping centers can provide advertisements of their products in real-time so a customer would have all the needed information  like price, brand, formulation, etc.</p>
			<p>AR technology has opened up a stack of possibilities to interactive advertising thus found use in practical applications like 3D animation, product modeling, text translation, product demos, tourism, etc.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Augmented Reality mobile apps are most used in</p>
			<ul>
				<li>retail and e-commerce</li>
				<li>marketing</li>
				<li>education</li>
				<li>healthcare</li>
				<li>gaming</li>
				<li>heavy industry</li>
			</ul>
			<p>lab3m Development Team has experienced qualified experts that possess deep knowledge of 3D modelling, computer vision and imaging expertise. If you have a terrific idea about your app involving AR we have suitable solutions in this field that are  most innovative and intuitive specially for you. Let us help you provide rich user experience to your customers with our <strong>Augmented Reality technologies</strong>.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>