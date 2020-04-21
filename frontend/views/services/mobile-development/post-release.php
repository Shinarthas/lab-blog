<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'After we conquered Top of all possible app markets there goes a post release stage where we offer all the necessary software maintenance and support to our customers.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Post release</h2>
			<p>After we conquered Top of all possible app markets there goes a post release stage where we offer all the necessary software maintenance and support to our customers. Don’t think we’ll just leave you hanging. We’ll offer you optimizing system capabilities, fixing errors and bugs, adding enhancements, onsite maintenance, remote desktop connection, etc. Moreover, our Q&A is familiar with this field, that's why a count of critical bugs is minimal!</p>
			<p>A defect which exists during testing yet unfound by the tester which is eventually found by the tester/end-user. We also called it "bug leakage". When it occured we mend it and make bug fix release.<p>
			<?= $this->render('//layouts/_estimate') ?>
			<p>Moreover, after the end of development your project, lab3m propose you <strong>Post Release Support</strong></p>
			<p><strong>What does it mean?</strong></p>
			<ul>
				<li>Our development team will fixed all bugs and crashes, if they appear</li>
				<li>We will refactor the code and create new version of your project</li>
				<li>We will help with progress of yours project (SEO optimization)</li>
			</ul>
			<p>Also you may reach us anytime you think fit via mail, skype, phone or any other way around. We’re always in touch.</p>
			<p>lab3m - follow your dream and let us bring it to life!</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>