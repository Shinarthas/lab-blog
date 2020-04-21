<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Mobile technologies and internet have become inherent part of our everyday life. People use them everywhere: at home, at work, in public transport']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
        <h1><?=$h1?></h1>
		<div class="content">
			<h2>Industry</h2>
			<p>Web development industry is fairly young but still it greatly progressed in a short period of time which identifies great market demand. True that if you want to distribute or gather information, website would be the fastest way. People have realized its importance and potential, that is why web development industry is experiencing such a big boom.</p>
			<p>From the other side, most businesses realised that websites can become their tools to communicate with clients, potential customers and other vendors, which will help to sell production and services more conveniently. Now one can easily see that almost all types of businesses are now reaching their customers via websites.</p>
			<p>With such a surge in progress website development, web designing, and web hosting costs have become affordable. And any type of business can find a decent solution on the market full of web developers, including small business and individuals.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>To build a proper website a web developer should possess a deep knowledge in following fields:</p>
			<ul>
				<li>HTML/CSS</li>
				<li>Content management system</li>
				<li>PHP or a similar server-side scripting language</li>
				<li>SEO</li>
				<li>Design</li>
			</ul>
			<p>lab3m Dev Team consist of highly qualified tested and proven web developers that correspond to the listed specifications. Thus you may stay positive that your website project will be conducted on a high standard.</p>
			<p>Please consider collaboration with us and contact our consultants. We are looking for your message!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>