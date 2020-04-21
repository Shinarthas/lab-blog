<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Managing an enterprise might be a different story, more obstacles, stress and drama. We have special solutions for great projects too. We can develop an admin panel especially for your site to maintain and control 24/7 the working process.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Enterprise solutions</h2>
			<p>Managing an enterprise might be a different story, more obstacles, stress and drama. We have special solutions for great projects too. We can develop an admin panel especially for your site to maintain and control the working process 24/7. On other hand we can provide suitable business app. There are range of advantages of utilizing such tools so it would be wise to consider them as well.</p>
			<p>An enterprise is a term for a very large business network. Therefore the phrase "enterprise solutions" refers to business solutions for large corporations which have large networks. lab3m uses it in different fields of development. We realize custom development of enterprise solutions that help our clients automate and optimize their business processes.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p><strong>Enterprise Solutions</strong> are provided for a scalable, easy to manage programming solution for implementation of business management and information availability for the customers. Enterprise solutions deals with the problem of providing information to clients both externally and internally. It deals with programming and databases. The main problem being how to most efficiently get our data accessible to those we want to access it. The solution have the following characteristics and more:</p>
			<ul>
				<li>Security</li>
				<li>Scalability</li>
				<li>Cost</li>
				<li>Management</li>
				<li>Flexibility</li>
			</ul>
			<p>Therefore, in order for a business to choose decent enterprise solutions a proper requirements definition must be completed. All desired features along with priorities for each feature must be assigned in order to make a suitable decision.</p>
			<p>lab3m - follow your dream and let's bring it to life!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>