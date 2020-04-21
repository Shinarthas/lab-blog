<?php
$this->title = ucfirst(Yii::$app->controller->id);

$this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Our team of 3D expert is ready to deliver astonishing solutions for VR, AR and 3D apps. Create your own 3D universe with Thunderrise.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
    <div class="row">
        <h1><?=$h1?></h1>
    </div>
</div>
<div class="container">
    <div class="row">
          <div class="content">
            <p>Some of the various fields of Thunderrise Dev Team expertise include 3D, Virtual Reality and Augmented Reality app development. <strong>3D, VR and AR  apps</strong> can be used as an impactful method to bring additional virtue in product or service development. We create unparalleled virtual experiences and work with our customers to adjust them to their business needs. Our team is a bunch of experts in creating amazing AR overlays, interactive videos, markerless AR, real-time effects on static images, 2D and 3D simulations of a product model and more. We strive to prove our skills and take part in new great projects!</p>
			<p>Assigning your <strong>3D, VR or AR app</strong> development projects to Thunderrise Dev Team automatically means getting a competent solution tailored by highly qualified specialists in computer graphics and software engineering. Thus you will be provided with:</p>
			<ul>
				<li>High-quality coding</li>
				<li>Expert consulting during development process</li>
				<li>Multi-disciplinary team of qualified specialists</li>
				<li>Ongoing support for provided 3D, VR and AR software</li>
				<li>Projects made in time</li>
			</ul>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Hope, you like playing <strong>3D games</strong> at least as much as we like creating them. If you do, then we are definitely on the same page! Contact us to augment this reality to its very best!</p>
			<p>For more details please proceed to next pages:</p>
			<ul>
				<li>Industry</li>
				<li>Augmented Reality</li>
				<li>3D gaming</li>
				<li>Unity Game Engine</li>
			</ul>
          </div>
<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
    
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>