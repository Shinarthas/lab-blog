<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Nowadays it’s not easy to imagine that competitive business exists without a website. Creating a website is a bit complicated task. But the most challenging is keeping the site fresh and up-to-date. But it’s crucial to for every successful business to occupy this.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Wordpress development</h2>
            <p>Nowadays it’s not easy to imagine that competitive business exists without a website. Creating a website is a bit complicated task. But the most challenging is keeping the site fresh and up-to-date. But it’s crucial to for every successful business to occupy this. Content Management Systems (further CMS) deal with it without any extra expenses on production.</p>
            <p>WordPress is one of the most popular CMS for website creation. It’s the best solution for publication with all the support standards, usability and visual attraction. WordPress is also free to distribute. lab3m has a team of experienced WordPress developers so you can trust us a website creation.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>With our assistance you can create or customize your website and make it the most profitable for your business needs. We spoke about the complication of updating your site so now it doesn’t matter. Keeping your site up-to-date won’t cost you any efforts because content management doesn’t require any special experience. WordPress is supported by all the devices and it can be upgraded with additional functionality via integrating third-party plugins. Contact lab3m and we will assist you in your own website creation.</p>
            <p>Our specialists can provide you with all the features WordPress can offer. They are able to create a site from the scratch, do the bug fix or enhance an existing platform as well as create a custom plugin and unique functionality.</p>
            <p>WordPress is very convenient platform and you don’t to be tech-savvy to occupy it. This CMS has a user-friendly administration panel that makes it extremely easy to customize your website according to your preferences. There is a huge amount of themes WordPress can offer, you just have to choose or create your own design. Here we are to assist you.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>