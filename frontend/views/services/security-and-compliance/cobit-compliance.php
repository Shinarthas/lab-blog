<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Control Objectives for Information and Related Technology is an IT governance framework. It helps managers to control technical requirements and business risks']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
            <h2>Cobit compliance</h2>
        	<p>Control Objectives for Information and Related Technology is an IT governance framework. It helps managers to control technical requirements and business risks.</p>
			<p>Managers in our company compiance managment methodology of project management. We adhere to all main method e.g.: Scrum, Waterfall and others.If your team is well-managed it will achive high goal in your field.</p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Thunderrise go through your project and we wish to estimate all of your ideas.</p>
			<p>We prove all of our project with different Technical Documentation e.g.: User Story, Resume of Work, Report of Work. In our opinion, it helps us control all stages of development and bear out our project.</p>
			<p>Keep your idea. Give it to our company. Get the greatest project!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>