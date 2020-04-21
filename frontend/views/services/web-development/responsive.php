<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Being responsive means to answer any customer’s need or wish and a high-quality website is one of them.  But since there are so many various devices invented it’s hard to adjust to one and every platform and screen. That’s why responsive layout aka adoptive design was created. ']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Responsive</h2>
			<p>Being responsive means to answer any customer’s need or wish and a high-quality website is one of them. But since there are so many various devices invented it’s hard to adjust to one and every platform and screen. That’s why responsive layout aka adoptive design was created. It makes a website really flexible and adaptive to any kind of device - smartphone, tablet, netbook, ebook, fridge and your coffee machine too. Any subdomains needed, no cuts on functionality, no cons - all pros. Watch your clients number grow and enjoy.</p>
			<p>Do you really think, that your site doesn't need a request in adaptive design? Be sure! With the help of adaptive design you will advance your income exponentially. 52% of your future client pipeline use their gadgets every day, every hour, every 15 minutes! They can't live without their smartphones. So, what can we do? Make adaptive design and enjoy our life!</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>lab3m has great team of web developers that will make this design for you. If you want to increase your income, you’ve got on the right page! Our web developers team includes: designers, front-end developers, back-end developers and Q&A. Are you still in doubt? OK, and if we told you that 95% of our project after making adaptive design increases income twice as much? Are you surprised? If you have your own idea of your website, please contact our consultants for further details so we could cooperate and create great thing together! If you don't have any idea, our designer will invent it for you! lab3m front-end developers direct you the best animation and optimization code of your future project. Back-end developers in lab3m invent the most convenient way to interact UX design with server and clients personal database. Finally, Q&A will test all process and give you only verified product. As simple as that you will get a fine product and enjoy our partnership.</p>
			<p>lab3m - follow your dream!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>