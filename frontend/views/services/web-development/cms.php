<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Using Joomla!, Drupal and Wordpress we promptly project and build sites with easy access and management for a customer. The main advantages of this decision is that the managing process doesn’t require any specific skills and maintain an option to review current state of work without developer involved.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Cms</h2>
			<p>Content management system or CMS is a an administration system that allows you to edit, manage, and publish site's content on an ongoing basis. CMS gives a full ownership over the website changes to the customer, so he won’t need to additionally involve developer to implement those changes.</p>
			<p>CMS website development is a must for businesses that strive to increase efficacy of their working process organization. In particular CMS provides a way of integrating business process into website. There are a great range of website applications that have been developed to increase productivity of business workflow but not every and sometimes nonу can suit your needs. That’s the case when you ought to develop your own. That’s when lab3m Dev Team come and help you.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Using Joomla!, Drupal and Wordpress we promptly project and build sites with easy access and management for a customer. The main advantages of this decision are that the managing process doesn’t require any specific skills and maintains an option to review current state of work. But if consultation about making modules or content amendments is needed lab3m Dev Team will gladly assist, be sure.</p>
			<p>To add more authenticity to your site consider adjusting suggested plugins. The amount is about endless and the chance to find the right one is great. But if a customer’s wish is to create his own original plugin it won’t make any difficulties for our development team. Rest assure that we will listen to your every whim and implement it the way you see it.</p>
			<p>lab3m - all for clients goals.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>