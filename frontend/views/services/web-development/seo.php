<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'When your site is neatly done all functioning just great and ready to bring your profit this is where one huge question appears “What’s next?” No need to feel left alone and helpless. We\'ve got a couple of ingenious SEO engineers for you, they will bring a traffic on your site in a blink of an eye.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Seo</h2>
			<p>When your site is neatly done all functioning just great and ready to bring your profit this is where one huge question appears “What’s next?” No need to feel left alone and helpless. We've got a couple of ingenious SEO engineers for you, they will bring a traffic on your site in a blink of an eye.</p>
			<p>How is it done? What for? Well, basically all the moves are for the sake of being on top in Google search. Not on the second page which only like 30% visit, but on the first one; ahead of your main competitors that is what important.</p>
			<p>There are the Light side and the Dark side of SEO. Obviously we are of jedi untempted by the darkness; we will bring you to light, I mean to the Google top unblemished.</p>
			<p>First of all we will look inside of your HTML-code, correct it and edit, optimize internally and bring eternal Peace. Second and the main step is to promote your site with help of the Force building references, targeted requests and credibility of your site in general. To maintain achieved positions and improve it we would need the third and final stage. It contains reviewing competitors way of action, improve your own content, change keywords and text for links, increase conversion and so many more. Count on us and we prove as worthy.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Nowadays, site, with good SEO-optimization consume the best position in the Google search result. lab3m has skilled employees for done SEO-optimization works. There are a lot of different SEO strategics, however we choose the more verify one. Google has special in readjustment system. It changes every month and it leads to flexible "push and pull strategy". What does it mean "flexible"?! It means, that you have cross functional strategy, that is adaptibility for changes in Google searching engine. Do you want new customers? Do you want to raise your income? So, let's do it together! Tomorrow is with us!</p>
			<p>What do you think about our approach? We are waiting for your message! Contact us right now!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>