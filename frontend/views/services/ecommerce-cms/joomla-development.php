<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");

$this->registerMetaTag(['name' => 'description', 'content' => 'Content Management Systems allow your business to occupy the wide space of internet so it will profitable as hell.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Joomla development</h2>
            <p>Content Management Systems allow your business to occupy the wide space of internet so it will profitable as hell. Joomla is one of the most popular open-source CMS and it will help you to keep your website attractive and up-to-date. It is the best solution for dynamic platforms that contain huge amount of content. Thunderrise provides excellent Joomla development service and can create an advanced website for you.</p>
            <p>The question can be born. Why Joomla? First of all it’s the fastest platform to edit your content (the easiest among all the CMSs). It’s not far from working in a simple text editor. Be sure that your data will be safe because Joomla locks content that is on moderation. The most beloved thing in using Joomla for developers is its simplicity in creating menus.  Even the most discerning website visitor will be satisfied by the collection of Joomla templates. As always, we have a professional team of Joomla developers so start the website creation from contacting us.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>Joomla has a variety of tools for manufacturing the website. The most important is that you don’t have a chaos on your screen, all the tools are minimalistic and almost all of them are multifunctional. It also reduces the server load and saves lots of time and space on the host. The other feature of Joomla made sites is that they are really flexible because you can manage the content without diving in the backend, directly on website page. Owners with the relevant permission can do it without any help of Joomla developers.</p>
            <p>Joomla interface supports a lot of languages and there are more language packs you can implement. Joomla is also compatible with all the browsers with a support of third-party plugins. In addition, it has suitable SEO extensions so your site will be on the top of search engines. It will definitely be profitable for every business.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>