<?php $this->registerCssFile("/styles/bootstrap.min.css");
$this->registerCssFile("/styles/services-inner.css");
$this->registerMetaTag(['name' => 'description', 'content' => 'Unit testing is a method which allows to check parts of initial code individually. To conduct unit testing QA engineers isolate those elements of program which are going to be tested and try to prove them capable to work separately.']);
?>
<?= $this->render('//layouts/_headerWhite',['lang'=>$lang]) ?><?= $this->render('//layouts/_head-red') ?>
<div class="services-inner">
<div class="container">
	<div class="row">
	<h1><?=$h1?></h1>
		<div class="content">
			<h2>Unit and integration testing</h2>
            <p>Unit testing is a method which allows to check parts of initial code individually. To conduct unit testing QA engineers isolate those elements of program which are going to be tested and try to prove them capable to work separately. This process requires deep consistent knowledge of the process so our QA testers pass harsh examination to confirm their qualification to handle such testings.</p>
            <?= $this->render('//layouts/_estimate') ?>
            <p>The unit testing process mainly consists creating tests for every function or method. It allows quickly check, whether the change in code led to errors appearance in already tested places of the program, and also facilitates discovery and fixing of such errors. Development is considered finished only in case all tests have been successfully passed.</p>
            <p>Integration testing is a method diametrically opposed to the unit testing. It consist in combining separate modules and testing them as a group.</p>
            <p>The integration testing is needed to verificate connection between components their co-operating with different parts of the system. Integration testing is provided on two levels component integration and system integration. There are three approaches to integration testing: Big Bang, Top-Down and Bottom-Up. With each approach you can get familiar with by contacting our consultation group to check out the details. We will gladly help you with your questions.</p>
		</div>
	<?= $this->render('//layouts/_servicesBar',['pages'=>$pages]) ?>
	</div>
</div>
</div>
<?= $this->render('//layouts/_blog_random') ?>