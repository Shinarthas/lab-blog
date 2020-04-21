<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Without overestimation, our developers are Jacks-of-all-trades if the deal is about web technologies. 
			They work with all kind of web services and even the most complicated demand make them happy.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Development sequence</h2>
			<p>Without overestimation, our developers are Jacks-of-all-trades if the deal is about web technologies. Web development refers to building, creating, and maintaining websites. It includes such aspects as web design, web publishing, web programming, and database management.</p>
			<p>Thunderrise Dev Team works with all level of complexity of web services and even the most complicated orders rather make them excited about upcoming project. Backend developers are also fully devoted to their main goals and put all their soul to the tasks.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>In 2016 there’s no talking about a website without its mobile version, because nowadays people tend to review the content via their smartphones or tablets. To follow this tendency Thunderrise Dev Team provides adjusting websites to mobile friendly site without any hardships. Web development includes many types of web content creation. Thunderrise does all works refer to content on your site, e.g. hand coding web pages in a text editor, building a website with the help of CMS and updating a blog via blogging website (we use our own blogging framework).</p>
			<p>Here is our recommendations on the website <strong>development sequences</strong>:</p>
			<ul>
				<li>Business Analysis</li>
				<li>Fundamentals</li>
				<li>Layouts & Design</li>
				<li>Content Build</li>
				<li>Coding</li>
				<li>Testing</li>
				<li>Launch</li>
				<li><strong>Go Live</strong></li>
			</ul>
			<p>Thunderrise gradually stands by this plan, so our projects have the same management structure! </p>
			<p>Thunderrise - follow your dream and let us bring it to life!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>