<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'In lab3m we provide a huge spectre of post-release support and maintenance services. We always seek for new effective solutions for proper product working so with the release our work is not yet finished.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Post release consulting</h2>
      <p>In lab3m we provide a spectre of <strong>post-release support</strong> and maintenance services such as:</p>
      <ul>
        <li>troubleshooting</li>
        <li>bug fixing</li>
        <li>software upgrades</li>
        <li>performance support, etc</li>
      </ul>
      <?= $this->render('//layouts/_estimate') ?>
      <p>Troubleshooting is an important stage of developing, testing, submitting, and releasing a project. There are four general areas within potential problems may occur: certificates, provisioning, building and debugging. lab3m specialists are adepts in all listed troubleshooting issues and will gladly assist you in your problem.</p>
      <p>To increase efficiency of workflow during bug fixing our team uses such approaches as blocking out time for each bug fix and a rule of thumb placeholder. Also to prove our capability we tried using benchmarks to project how many bugs our team can handle, average score of our maintenance team is 15 bugs per month. Stay assure, your software is in reliable hands.</p>
      <p>In many situations a software upgrade is inevitable part of development process. Utilizing new software features in application requires general upgrading of software. Also upgrades are needed to maintain innovativeness of specific system components. lab3m developers always seek for new effective solutions for proper product working and use best practices for your software upgrades.</p>
      <p>Gathering data is vital that’s why using different metrics we constantly monitor your software performance to detect parts that perform poorly and improve your key stats.</p>
      <p>We always try our best to help our customers in all possible ways we can. You can rely on us with ease!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>