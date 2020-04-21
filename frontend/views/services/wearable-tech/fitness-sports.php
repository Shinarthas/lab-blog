<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'One of the great ways to use wearable technologies are sport and fitness. Losing weight, jogging every day, visiting gym and having active lifestyle can be really hard.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Fitness & sports</h2>
            <p>One of the great ways to use wearable technologies are <strong>sport and fitness</strong>. Losing weight, jogging every day, visiting gym and having active lifestyle can be really hard. So here they come, wearable technologies can seriously simplify your fitness process by tracking your activity. This should give you a strong motivation to reach your goal.</p>
			<p>Fitness trackers are designed to let you know how much activity you have in your regular day. Some of them track your heart rate via in-built monitors, others can trace how well you’re sleeping. Most of that fitness trackers are synchronized with your smartphone with the help of mobile applications.</p>
			<p>Nowadays, <strong>wearable fitness gadgets</strong> have grown extremely popular over the years. They seem to be everywhere, as millions of people have made them a part of their daily pursuits. Typical <strong>fitness wearable devices</strong> accurately monitor your level of physical activity, the amount of calories you burn, the numbers of steps.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Imagine that you’re with your family and friends. You really worry about how much holiday food you’ll take and how little exercise you’ll get. In this case wearable fitness technology would be a perfect holiday gift. These gadgets will help your loved ones balance fitness and eating over the holidays.</p>
			<p>lab3m Dev Team creates different kinds of apps for any wearable tech devices. Our working process is full of state-of-the-art technologies thus you may rest assured that you will get hi-tech products, that will be trendy and full of new features.</p>
			<p>lab3m - follow your dream and let us bring it to life!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>